<?php

////////////////////////////////////////////////////////////////
// Interface for running protoql programs.

$js = '';
if (array_key_exists("protoql", $_POST)) {
  $js = $_POST["protoql"];
}

echo <<<EOS
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title></title>
    <style>
      body {padding:25px; font-family:Verdana,Arial,sans-serif; font-size:12px;}
      textarea {width:100%; font-size:11px;}

      path.link { fill: none; stroke: #666; stroke-width: 1.5px; }
      circle { fill: #ccc; stroke: #fff; stroke-width: 1.5px; }
      text { fill: #000; font: 10px sans-serif; pointer-events: none; }
    </style>
    <script src="http://d3js.org/d3.v3.js"></script>
    <script type="text/javascript">
      //<![CDATA[
      var svg = null;
      
      var time = null;
      var queries = {};
      var queryCount = 0;
      var ge = function(id){return document.getElementById(id);};
      var log = function(s) {
        var duration = ((new Date().getTime()) - time)/1000;
        ge('log').value += s + " (" + duration.toString() + " seconds)\\n";
      };

      function Input(constant, outLabel) {
        var query = queries[outLabel];
        log("Input: " + constant);
        query.accumulate(constant);
        
        var query = new Object();
        query.outLabel = outLabel;
        query.nodeLabel = "Input(" + constant + "," + outLabel + ")";
        queryCount++;
        queries["Input_" + queryCount.toString() + ""] = query;
      }

      function Output(inLabel) {
        var query = new Object();
        query.accumulate = function (constant) {
          log("Output: " + constant);
        };
        query.nodeLabel = "Output(" + inLabel.toString() + ")";
        queries[inLabel] = query;
        updateNodeColor(svg, query.nodeLabel);
      }

      function Query(inLabel, server, operation, outLabel) {
        var query = new Object();
        var nodeLabel = "Query(" + inLabel + ", " + operation + ")";
        query.outLabel = outLabel;
        query.server = server;
        query.operation = operation;
        query.constants = [];
        query.next = queries[outLabel];
        query.accumulate = function (constant) {
          query.constants.push(constant);
          if (query.constants.length == 2)
            call(query);
        };
        query.receive = function (constant) {
          query.next.accumulate(constant);
          updateNodeColor(svg, nodeLabel);
        };
        queryCount++;
        query.nodeLabel = nodeLabel;
        queries[inLabel] = query;
      }

      function call(query) {
        var XHR = new XMLHttpRequest();
        var url = 
            'http://'+query.server+'/pql.php'
          + '?operation='+query.operation
          + '&arguments='+query.constants[0].toString()+','+query.constants[1].toString();
        var invocationHistoryText = "";
        if(XHR) {    
          XHR.open('GET', url, true);
          XHR.onreadystatechange =
            function (evtXHR) {
              if (XHR.readyState == 4) {
                if (XHR.status == 200) {
                  log("Response from " + query.server + ": " + XHR.responseText);
                  if (query)
                    query.receive(XHR.responseText);
                } else {
                  log("Error: invocation error occured.");
                }
              }
            };
          XHR.send(); 
        } else {
          log("Error: no invocation took place at all.");
        }
      }

      function buildGraph(links) {

        var nodes = {};

        // Compute the distinct nodes from the links.
        links.forEach(function(link) {
          link.source = nodes[link.source] || (nodes[link.source] = {name: link.source});
          link.target = nodes[link.target] || (nodes[link.target] = {name: link.target});
        });

        var width = 750, height = 550;

        var force = d3.layout.force()
                      .nodes(d3.values(nodes))
                      .links(links)
                      .size([width, height])
                      .linkDistance(60)
                      .charge(-300)
                      .on("tick", tick)
                      .start();

        svg = d3.select("#graph").append("svg")
                .attr("width", width).attr("height", height);

        // Build the arrow.
        svg.append("svg:defs")
           .selectAll("marker")
           .data(["end"])
           .enter().append("svg:marker")
           .attr("id", String)
           .attr("viewBox", "0 -5 10 10")
           .attr("refX", 15)
           .attr("refY", -1.5)
           .attr("markerWidth", 6)
           .attr("markerHeight", 6)
           .attr("orient", "auto")
           .append("svg:path")
           .attr("d", "M0,-5L10,0L0,5");

        // Add the links and the arrows.
        var path = svg.append("svg:g").selectAll("path")
                      .data(force.links())
                      .enter().append("svg:path")
                      // .attr("class", function(d) { return "link " + d.type; })
                      .attr("class", "link")
                      .attr("marker-end", "url(#end)");

        // Define the nodes.
        var node = svg.selectAll(".node")
                      .data(force.nodes())
                      .enter().append("g")
                      .attr("class", "node")
                      .call(force.drag);

        // Add the nodes.
        node.append("circle")
            .attr("r", 6)
            .style("fill",
                function(d) {
                  if (d.name[0] == 'I') return "green";
                  if (d.name[0] == 'Q') return "gray";
                  if (d.name[0] == 'O') return "red";
                }
              );

        // Add the text.
        node.append("text")
            .attr("x", 12)
            .attr("dy", ".35em")
            .text(function(d) { return d.name; });

        // Add the curvy lines.
        function tick() {
          path.attr("d", function(d) {
              var dx = d.target.x - d.source.x;
              var dy = d.target.y - d.source.y;
              var dr = 0; //Math.sqrt(dx * dx + dy * dy);
              return "M" + 
                d.source.x + "," + d.source.y + "A" + dr + "," + dr + " 0 0,1 " + 
                d.target.x + "," + d.target.y;
            })

          node.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });
        }
      } // buildGraph  

      function updateNodeColor(svg, nodeLabel) {
        if (svg == null) return;
        var node = svg.selectAll(".node");
        node.append("circle")
          .attr("r", function(d) {return d.name == nodeLabel || d.name[0] == "*" ? 8 : 6})
          .style("fill",
              function(d) {
                if (d.name == nodeLabel || d.name[0] == "*") {
                  d.name = "*" + nodeLabel;
                  return "blue";
                }
                if (d.name[0] == 'I') return "green";
                if (d.name[0] == 'Q') return "gray";
                if (d.name[0] == 'O') return "red";
              }
            );
      }
      
      //]]>
    </script>
EOS;

echo '
    <script type="text/javascript">
      //<![CDATA[
      function run() {
        time = new Date().getTime();        
'.$js.'
        var links = [];
        for (name in queries) {
          if (queries[name].outLabel != null) {
            var targetNodeLabel = queries[queries[name].outLabel].nodeLabel;
            links.push({"source":queries[name].nodeLabel,"target":targetNodeLabel});
          }
        }
        buildGraph(links);
      }
      //]]>
    </script>';

echo <<<EOS
  </head>
  <body onload="run();">
   <form action="protoql.php" method="post">
     <table style="width:100%;">
       <tr>
         <td style="width:50%">
           Paste <b>protoql</b> program directly into the text area below:
           <br/>
           <textarea name="protoql" id="input" rows="31">
EOS;
echo $js;
echo <<<EOS
</textarea>
         </td>
         <td style="width:50%">
           Activity log:
           <br/>
           <textarea id="log" rows="31"></textarea>
         </td>
       </tr>
       <tr>
         <td>
           <input type="submit" value="Run protoql program."/>
           <input type="submit" value="Load example." onclick="ge('input').value=ge('example').value;"/>
         </td>
         <td></td>
       </tr>
       <tr><td align="center" colspan="2"><div id="graph"></div></td></tr>
     </table>
   </form>
   <textarea id="example" style="display:none;">
/*
  Below is a compiled version of the following Metaql program:

    Print (1 + 2 + 3 + 4 + 5) $
    Print (6 + 7 + 8 + 9 + 10) $
    End
*/
Output (1);
Query (2,"one.protoql.org","Add",1);
Query (3,"one.protoql.org","Add",2);
Input ("2",3);
Input ("4",3);
Query (5,"one.protoql.org","Add",2);
Input ("3",5);
Query (7,"one.protoql.org","Add",5);
Input ("1",7);
Input ("5",7);
Output (8);
Query (9,"one.protoql.org","Add",8);
Query (10,"one.protoql.org","Add",9);
Input ("7",10);
Input ("9",10);
Query (12,"one.protoql.org","Add",9);
Input ("8",12);
Query (14,"one.protoql.org","Add",12);
Input ("6",14);
Input ("10",14);
    </textarea>
  </body>
</html>
EOS;

/*eof*/?>