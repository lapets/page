<html>
 <head>
 <title>BU CAS Math 142 Spring 2013 - lecture notes</title>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script>

 function widget_format_click(ix, fmt) {
   var formats = ['text','html'];
   for (var i = 0; i < formats.length; i++) {
     if (fmt == formats[i]) {
       $('#widget_format_'+ix+'_'+formats[i]).addClass('btn_selected');
       $('#widget_argument_format_'+ix+'_'+formats[i]).show();
     } else {
       $('#widget_format_'+ix+'_'+formats[i]).removeClass('btn_selected');
       $('#widget_argument_format_'+ix+'_'+formats[i]).hide();
     }
   }
 }

 </script> 
 <style>
  body { font-family: Times,serif; }
  a { text-decoration:none; color:#AC701E; }
  a:hover { text-decoration:underline; color:firebrick; }
  #container { margin: 50px 60px 50px 60px; }
  .fig_table td { padding: 4px 10px 4px 10px; margin: 0px 10px 0px 10px; white-space:nowrap; background-color:#EFEFEF;}
  .fig_table2 .cell { padding: 4px 10px 4px 10px; margin: 0px 10px 0px 10px; white-space:nowrap; background-color:#EFEFEF;}

  ul { /* padding-top:0px; padding-bottom:0px; padding-left:0px; margin:0px; */  }
  ol { padding-top:0px; padding-bottom:0px; padding-left:5px; margin-left:15px;  }
  li { padding:0px; min-width:200px; position:relative; text-align:left; }

  .btn_assignment { display:inline-block; padding:5px; font-size:10px; font-family:Verdana,Arial,Sans-serif; background-color:#EFEFEF; cursor:pointer; }
  
  .btn { display:inline-block; margin-right:5px; font-size:10px; font-family:Verdana,Arial,Sans-serif; background-color:#CFCFCF; cursor:pointer; }
  .btn_verify { display:inline-block; padding:5px; font-size:10px; font-family:Verdana,Arial,Sans-serif; background-color:#CFCFCF; cursor:pointer; }
  .btn_format { display:inline-block; padding:5px; font-size:10px; font-family:Verdana,Arial,Sans-serif; background-color:#CFCFCF; cursor:pointer; }
  .btn_selected { background-color:#EFEFEF; cursor:pointer; }
  .widget_argument_controls { display:inline-block; font-size:10px; font-family:Verdana,Arial,Sans-serif; float:right; }
  
  h2 { margin-top:40px; color:#6A6A6A; }
  h3 { padding-top:40px; }
  
  .html_matrix_lft { border-left:1px solid #000000; border-top:1px solid #000000; border-bottom:1px solid #000000; }
  .html_matrix_rgt { border-right:1px solid #000000; border-top:1px solid #000000; border-bottom:1px solid #000000; }
  .html_matrix_entry { text-align:center; padding-left:2px; padding-right:2px; margin:0px; }
  .html_norm_lft { border-left:1px solid #000000; }
  .html_norm_rgt { border-right:1px solid #000000; }

  .argument       { margin:0px 20px 0px 20px; padding:0px 15px 0px 15px; background-color:#F6F6F6; padding:10px; border:2px solid #FFFFFF; }
  .argument:hover { margin:0px 20px 0px 20px; padding:0px 15px 0px 15px; background-color:#F6F6F6; padding:10px; border:2px solid green; } /*D7F8D7*/
 
  .mathenv { padding:8px; }
  .fact { }
  .definition { }
  .theorem { }
  .proposition_to_know { background-color:#F6F3C8; } /*F9F7DC*/
  .example_to_know { background-color:#D7F8D7; }
  .Pythoncode { padding:10px; background-color:#D7F8D7; margin-top:8px; margin-bottom:8px; }
  .snippet { margin-left:10px; background-color:#E7E7E7; padding:5px; }
  
  .secn { color:#8A8A8A; }
 </style>
 </head>
 <body>
 <div id="container">


<?php

include("formats.php");

function widget_format_buttons($ix) {
  return '<div class="btn" style="margin-bottom:10px;">'
          .'<div id="widget_format_'.$ix.'_html" class="btn_format btn_selected" onclick="widget_format_click('.$ix.', \'html\');">HTML</div>'
          .'<div id="widget_format_'.$ix.'_text" class="btn_format" onclick="widget_format_click('.$ix.', \'text\');">text</div>'
         .'</div>';
}

function widget_argument($ix, $v, $text) {
  return "\n"
    .'~<div class="argument">'
    .'<div style="float:right; margin-left:20px;">'
      .'<div class="widget_argument_controls">'
        . widget_format_buttons($ix)
        .'<a class="btn_verify" target="_blank" href="'.$v.'/load.php?e='.$ix.'">load into verifier</a>'
      .'</div>'
    .'</div>'
    .'<div id="widget_argument_format_'.$ix.'_html">'.format_argument_as_HTML($text).'</div>'
    .'<div id="widget_argument_format_'.$ix.'_text" style="display:none;">'.'<code>'.format_argument_as_text($text)."</code>".'</div>'
    ."</div>~";
}

global $txt;
function r($x,$y) {
  global $txt;
  $txt = str_replace($x,$y,$txt);
}

$txt = file_get_contents('materials.html');




// Generate the proof script section formatting and links.
$sections = array();
$temp = explode("\n@\n", $txt);
$sections[] = format_custom_as_HTML($temp[0]);
$ix = 1;
for ($i = 1; $i < count($temp); $i++) {
  $a = explode("/@", $temp[$i]);

  $v = "aartifact";
  if (strpos($a[0],"~aartifact8\n") !== false) $v = "aartifact8";
  
  $sections[] = widget_argument($ix, $v, $a[0]);
  $sections[] = format_custom_as_HTML($a[1]);
  $ix++;
}
$html = implode("", $sections);

// Display the page.
$txt = $html;

r('<only132>', '<!--');
r('</only132>', '-->');

r('<only142>', '');
r('</only142>', '');

r('</h2>\n\n', '</h2>\n\n<p>');
r("\n\n", "</p>\n\n<p>");
r("<p>~", "");
r("~</p>", "");
r("<solution>", '<div style="padding:10px; background-color:#D7F8D7; margin-top:8px; margin-bottom:8px; ">');
r("</solution>", "</div>");
r("<solutionHomework>", '<div style="padding:0px; background-color:#D7F8D7; border:2px solid #D7F8D7;">');
r("</solutionHomework>", "</div>");
$txt = $txt.'</p>';

if (array_key_exists('hw', $_GET)) {
  $num = $_GET['hw'];
  $a = explode('<!--assignment'.$_GET['hw'].'-->', $txt);
  $a = explode('<!--/assignment'.$_GET['hw'].'-->', $a[1]);
  $txt = $a[0];
  $txt = str_replace(
    ('<a href="materials.php?hw='.$num.'">show only this assignment</a>'),
    ('<a href="materials.php#assignment'.$num.'">back to full lecture notes</a>'),
    $txt);
} else {
  $txt = "<b>NOTE:</b> This page contains all the machine-verifiable examples presented during the lectures, as well as all the homework assignments."
         .' <b><a href="index.html">Click here</a></b> to go back to the main page with the course information and schedule.'
         .$txt;
}

echo $txt;

?>

</div>
</body>
</html>
