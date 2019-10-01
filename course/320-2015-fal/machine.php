<?php
  // Support for loading a sequence of instructions via the URL.
  $insts = "";
  if (array_key_exists('instructions', $_GET))
    $insts = str_replace('_', ' ', str_replace('~', "\n", $_GET['instructions']));
?>
<html>
  <head>
    <title>machine simulator</title>
    <style>
html, body { height:98%; width:98%; }
#source { float:left; width:185px; margin:4px; padding:4px; background-color:white; border:1px solid #999999; }
#input { font-family:Courier,Monospace; font-size:12px; line-height:14px; float:left; width:183px; margin:1px; padding:2px; border:0px solid #999999; }
#instructions { font-family:Courier,Monospace; text-align:left; font-size:12px; float:left; width:185px; margin:4px; padding:8px 4px 4px 4px; background-color:#DDDDDD; }
#animation { float:left; min-width:530px; margin:4px; padding:4px; background-color:#DDDDDD; }
.odd { display:block; background-color:#FFFFFF; line-height:14px; }
.even { display:block; background-color:#EFEFEF; line-height:14px; }
.cell { display:inline-block; border:0px 0px 1px 0px; width:20px; margin:0px 1px 3px 1px; font-size:10px; font-family:Arial,sans-serif; background-color:#DDDDDD; }
.cell_even { display:inline-block; border:1px solid #AAAAAA; width:20px; margin:1px 0px 1px 0px; font-size:10px; font-family:Arial,sans-serif; background-color:#FFFFFF; }
.cell_odd { display:inline-block; border:1px solid #AAAAAA; width:20px; margin:1px 0px 1px 0px; font-size:10px; font-family:Arial,sans-serif; background-color:#DADADA; }
.inst {}
.line_number { color:#999999; }
.mem { cursor:pointer; }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script>
var RANGE = [-7, 17], LIMIT = 100;

function resize() {
  $('#source').height(window.innerHeight-40);
  $('#input').height(window.innerHeight-70);
  $('#instructions').height(window.innerHeight-40);
  $('#animation').height(window.innerHeight-40);
}
window.onresize = resize;

function highlight(control, counter) {
  $('.inst').css('background-color', '');
  $('.mem').css('background-color', '');
  $('#inst_'+control).css('background-color', 'pink');
  $('#mem_'+counter).css('background-color', 'red');
}

function instructions() {
  var lines = $('#input').val().replace(/\(|\)/g, "").split("\n");
  var out = '';
  for (var i = 0; i < lines.length; i++)
    out += 
      '<span id="inst_' + i + '" class="inst ' + (i%2==1?'odd':'even') + '">'
        + '<span class="line_number">' + (i < 10 ? '&nbsp;' : '') + i + ': ' + '</span>'
        + lines[i].split("#")[0] + (lines[i].split("#")[1] ? lines[i].split("#")[1] : '') + (lines[i].split("#")[2] ? lines[i].split("#")[2] : '')
        + '&nbsp;</span>';
  $('#instructions').html(out);
}

function cell(a, m) {
  var color = (m[a].color != null) ? (' style="background-color:'+m[a].color+';" ') : ' ';
  m[a].color = null;
  return '<div ' + color + 'class="cell_' + (Math.abs(a%2)==1 ?'odd':'even') + '">' + m[a].val + '</div>';
}

function memory(m, control, counter) {
  var out = '';
  for (var a = RANGE[0]; a < RANGE[1]; a++)
    out += cell(a, m);
  return '<div id="mem_' + counter + '" class="mem" onclick="highlight(' + control + ', ' + counter + '); ">' + out + '</div>';
}

function simulate(insts, mem) {
  $('#animation').append(_.map(_.range(RANGE[0], RANGE[1]), function(i){ return '<div class="cell">'+i+'</div>'; }));
  var control = 0, counter = 0;
  while (control < insts.length && counter < LIMIT) {
    counter++;
    var inst = insts[control].split(' '), step = true, control_old = control;

    // Set the control index buffer.
    mem[6] = {'val':control_old};

    if (inst[0] == 'goto') {
      control = insts.indexOf('label ' + inst[1]);
      step = false;
    }
    if (inst[0] == 'branch' && mem[parseInt(inst[2])].val != 0) {
      mem[parseInt(inst[2])].color = 'lightgreen';
      control = insts.indexOf('label ' + inst[1]);
      step = false;
    }
    if (inst[0] == 'jump') {
      mem[parseInt(inst[1])].color = 'lightgreen';
      control = mem[parseInt(inst[1])].val;
      step = false;
    }
    if (inst[0] == 'label')
      /* Do nothing. */;
    if (inst[0] == 'set' )
      mem[parseInt(inst[1])] = {'val':parseInt(inst[2]), 'color':'pink'};
    if (inst[0] == 'copy') {
      var readAddr = mem[3].val;
      mem[mem[4].val] = {'val':mem[mem[3].val].val, 'color':'pink'};
      mem[readAddr].color = 'lightgreen';
    }
    if (inst[0] == 'add' ) {
      mem[0] = {'val':mem[1].val + mem[2].val, 'color':'pink'};
      mem[1].color = 'lightgreen';
      mem[2].color = 'lightgreen';
    }
    if (inst[0] == 'mul' ) {
      mem[0] = {'val':mem[1].val * mem[2].val, 'color':'pink'};
      mem[1].color = 'lightgreen';
      mem[2].color = 'lightgreen';
    }

    // Special "high-level" macro commands not in the actual language.
    if (inst[0] == '#increment#' )
      mem[parseInt(inst[1])] = {'val':mem[parseInt(inst[1])].val + 1, 'color':'pink'};
    if (inst[0] == '#decrement#' )
      mem[parseInt(inst[1])] = {'val':mem[parseInt(inst[1])].val - 1, 'color':'pink'};
    if (inst[0] == '#copy#' ) {
      mem[parseInt(inst[1])].color = "lightgreen";
      mem[parseInt(inst[2])] = {'val':mem[parseInt(inst[1])].val, 'color':'pink'};
    }
    
    if (step)
      control++;
    $('#animation').append(memory(mem, control_old, counter));
    
    // Reset the output buffer.
    mem[5] = {'val':-1};
  }
}

function run() {
  $('#animation').html('');
  var mem = {};
  for (var a = RANGE[0]; a < RANGE[1]; a++) 
    mem[a] = {'val':0};
  mem[5] = {'val':-1};
  simulate($('#input').val().replace(/\(|\)/g, "").split('\n'), mem);
}
    </script>
  </head>
  <body style="text-align:center;" 
        onload="resize();<?php if (strlen($insts) > 0) echo 'instructions();run();'; ?>"
    >
    <div style="margin:0 auto; width:950px;">
      <div id="source">
        <textarea id="input" onkeyup="instructions();"><?php echo $insts; ?></textarea><br/>
        <button onclick="run();">simulate</button>
      </div>
      <div id="instructions"></div>
      <div id="animation"></div>
    </div>
  </body>
</html>
