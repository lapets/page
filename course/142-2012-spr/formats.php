<?php

// formats.php

function format_argument_as_source($t) {
  
  $t=tr($t,'%[', '');
  $t=tr($t,'%]', '');
  $t=tr($t,'\\~', '  ');
  $t=tr($t, "#,", ",");
  foreach (array('=','\\subset','\\in','<','>',"\\leq","\\geq","\\sim","iff","\\~","\\vdots","\\neq",":=") as $rel)
    $t=tr($t,'& '.$rel.' &', ' '.$rel.' ');
  $t=tr($t,"\\\\", "");

  foreach (array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z') as $v )
    $t=tr($t,'%'.$v, $v);
  foreach (array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z') as $v )
    $t=tr($t,'%'.$v, $v);

  return $t;
}

function format_argument_as_text($t) {
  
  $t=format_argument_as_source($t);

  $t = str_replace("\n", "<br/>", $t);
  $t = str_replace(" ", "&nbsp;", $t);

  return $t;
}

function format_argument_as_HTML($t) {

  $t=tr($t,'%[', '\\begin{eqnarray}');
  $t=tr($t,'%]', '\\end{eqnarray}');
  $t=tr($t,"\\\\\n", "\\\\");
  $t=tr($t,"\\\\<br/>", "\\\\");
  $t=tr($t,";\n", ";");
  $t=tr($t, ";", "#;");

  $t=tr($t, "`", " ");

  $t=tr($t, "*", "\cdot");
  $t=tr($t, '^\\t', '<sup>&#8868;</sup>');
  $t=tr($t, "[", "#[");
  $t=tr($t, "]", "#]");
  
  $t=tr($t, "\\and", '&nbsp;&nbsp;<span style="color:#CBCBCB; font-weight:bold;">and</span>');
  $t=tr($t, "\\implies", '<span style="color:#ABABAB; font-weight:bold;">implies</span>');

  $t = format_custom_as_HTML($t);

  $t = str_replace("\n", "<br/>", $t);
  //$t = str_replace(" ", "&nbsp;", $t);

  return $t; 
}



function format_custom_as_HTML($t) {




  $t=tr($t,"\\begin{eqnarray}\n","\\begin{eqnarray}");

  $t=tr($t, " \\ ", '&nbsp;&nbsp;&nbsp;&nbsp;');
  $t=tr($t, '  $$', '<div style="padding-left:20px">');
  $t=tr($t, "$$\n", "</div>\n");
  
  $t=tr($t,"\\nindent", "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

  $t=tr($t,'\\begin{eqnarray}', '<table style="padding-left:20px; margin-top:3px;"><tr><td style="text-align:right; white-space:nowrap;"><table style="width:100%;"><tr><td style="text-align:right;">');
  foreach (array('=','\\subset','\\in','<','>',"\\leq","\\geq","\\sim","iff","\\~","\\vdots","\\neq",":=","\\mapsto","\\not\\in") as $rel)
    $t=tr($t,'& '.$rel.' &', '<td></tr></table></td><td> '.$rel.' </td><td><table style="white-space:nowrap;"><tr><td style="white-space:nowrap;">');
  $t=tr($t,'\\\\', '</td></tr></table></td></tr><tr><td style="text-align:right;"><table style="width:100%;"><tr><td style="text-align:right;">');
  $t=tr($t,'\\end{eqnarray}', '</td></tr></table></td></tr></table>');


  $t=tr($t,'\\begin{tabular}', '<table><tr><td style="text-align:right;">');
  $t=tr($t,'\\end{tabular}', '</td></tr></table>');
 
  $t=tr($t, '\\ddx', '</td><td><table cellpadding="0" cellspacing="0" style="display:inline;"><tr><td >&nbsp;</td><td><table cellpadding="0" cellspacing="0" style="font-size:12px;"><tr><td style="white-space:nowrap; border-bottom:1px solid #000000;">'
                     . '<i>d</i>'. '</td></tr><tr><td style="white-space:nowrap;">'
                     . '<i>dx</i>' . '</td></tr></table></td><td>&nbsp;</td></tr></table></td><td>');
 
  $t=tr($t, '\\mapsto', '&#x21A6;');
  $t=tr($t, '\\varepsilon', '&epsilon;');
  $t=tr($t, '\\lambda', '&lambda;');
  $t=tr($t, '\\delta', '&delta;');
  $t=tr($t, '\\vdots', '&#8942;');
  $t=tr($t, '\\forall', '&forall;');
  $t=tr($t, '\\span', 'span');
  $t=tr($t, '\\not\\in', '&notin;');
  $t=tr($t, '\\exists', '&exist;');
  $t=tr($t, '\\ll', '&#8810;');
  $t=tr($t, '\\R^+', '<b>R</b><sup>+</sup>');
  $t=tr($t, '\\R^{1 \times 1}', '<b>R</b><sup>1&times;1</sup>');
  $t=tr($t, '\\R^{n \times 1}', '<b>R</b><sup><i>n</i>&times;1</sup>');
  $t=tr($t, '\\R^{1 \times n}', '<b>R</b><sup>1&times;<i>n</i></sup>');
  $t=tr($t, '\\R^{2 \times 2}', '<b>R</b><sup>2&times;2</sup>');
  $t=tr($t, '\\R^(2 \times 2)', '<b>R</b><sup>2&times;2</sup>');
  $t=tr($t, '\\R^{2 \times 3}', '<b>R</b><sup>2&times;3</sup>');
  $t=tr($t, '\\R^{3 \times 2}', '<b>R</b><sup>3&times;2</sup>'); 
  $t=tr($t, '\\R^(3 \times 2)', '<b>R</b><sup>3&times;2</sup>'); 
  $t=tr($t, '\\R^(3 \times 3)', '<b>R</b><sup>3&times;3</sup>'); 
  $t=tr($t, '\\R^{3 \times 3}', '<b>R</b><sup>3&times; 3</sup>');
  $t=tr($t, '\\R^{4 \times 4}', '<b>R</b><sup>4&times; 4</sup>');
  $t=tr($t, '\\R^{5 \times 9}', '<b>R</b><sup>5&times; 9</sup>');
  $t=tr($t, '\\R^{17 \times 9}', '<b>R</b><sup>17&times; 9</sup>');
  $t=tr($t, '\\R^{n \times n}', '<b>R</b><sup><i>n</i>&times;<i>n</i></sup>');
  $t=tr($t, '\\R^{n \times m}', '<b>R</b><sup><i>n</i>&times;<i>m</i></sup>');
  $t=tr($t, '\\R^{m \times n}', '<b>R</b><sup><i>m</i>&times;<i>n</i></sup>');
  $t=tr($t, '\\R^2', '<b>R</b><sup>2</sup>');
  $t=tr($t, '\\R^3', '<b>R</b><sup>3</sup>');
  $t=tr($t, '\\R^4', '<b>R</b><sup>4</sup>');
  $t=tr($t, '\\R^5', '<b>R</b><sup>5</sup>');
  $t=tr($t, '\\R^n', '<b>R</b><sup><i>n</i></sup>');
  $t=tr($t, '^\\top', '<sup>&#8868;</sup>');
  $t=tr($t, '^\\bot', '<sup>&perp;</sup>');
  $t=tr($t, '\\R', '<b>R</b>'); //&#8477;
  $t=tr($t, '\\Z', '<b>Z</b>');
  $t=tr($t, '\\I', '<b>I</b>');
  $t=tr($t, '\\0', '<b>0</b>');
  $t=tr($t, '\\pm', '&plusmn;');
  $t=tr($t, '\\theta', '&theta;');
  $t=tr($t, '\\sin', 'sin&nbsp;');
  $t=tr($t, '\\cos', 'cos&nbsp;');
  $t=tr($t, '\\exp', 'exp');
  $t=tr($t, '\\sqrt', '&radic;');
  $t=tr($t, '\\otimes', '&otimes;');
  $t=tr($t, '\\cdot', '&sdot;');
  $t=tr($t, '\\circ', '<span style="font-size:10px;">o</span>');
  $t=tr($t, '\\to', '&rarr;');
  $t=tr($t, '\\oplus', '&oplus;');
  $t=tr($t, '\\times', '&#215;');
  $t=tr($t, '\\subset', '&sub;');
  $t=tr($t, '\\cup', '&cup;');
  $t=tr($t, '\\cap', '&cap;');
  $t=tr($t, '\\det', 'det&nbsp;');
  $t=tr($t, '\\rref', 'rref');
  $t=tr($t, '\\rank', 'rank');
  $t=tr($t, '\\trace', 'trace&nbsp;');
  $t=tr($t, '\\basis', 'basis&nbsp;');
  $t=tr($t, '\\dim', 'dim');
  $t=tr($t, '\\im', 'im');
  $t=tr($t, '\\ker', 'ker');
  $t=tr($t, '\\neq', '&ne;');
  $t=tr($t, '\\leq', '&le;');
  $t=tr($t, '\\geq', '&ge;');
  $t=tr($t, '\\sim', '&sim;');
  $t=tr($t, '\\in', '<span style="font-size:12px;">&#8712;</span>');
  $t=tr($t, '\\i', '<b>i</b>');
  $t=tr($t, '_1', '<sub>1</sub>');
  $t=tr($t, '_2', '<sub>2</sub>');
  $t=tr($t, '_3', '<sub>3</sub>');
  $t=tr($t, '_4', '<sub>4</sub>');
  $t=tr($t, '_5', '<sub>5</sub>');
  $t=tr($t, '_6', '<sub>6</sub>');
  $t=tr($t, '_7', '<sub>7</sub>');
  $t=tr($t, '_8', '<sub>8</sub>');
  $t=tr($t, '_{ij}', '<sub><i>ij</i></sub>');
  $t=tr($t, '_{ii}', '<sub><i>ii</i></sub>');
  $t=tr($t, '_{jj}', '<sub><i>jj</i></sub>');
  $t=tr($t, '_{ji}', '<sub><i>ji</i></sub>');
  $t=tr($t, '_n', '<sub><i>n</i></sub>');
  $t=tr($t, '_m', '<sub><i>m</i></sub>');
  $t=tr($t, '_k', '<sub><i>k</i></sub>');
  $t=tr($t, '_V', '<sub><i>V</i></sub>');
  $t=tr($t, '_W', '<sub><i>W</i></sub>');
  $t=tr($t, '_B', '<sub><i>B</i></sub>');
  $t=tr($t, '_i', '<sub><i>i</i></sub>');
  $t=tr($t, '_{i=1}', '<sub><i>i</i> = 1</sub>');
  $t=tr($t, '_{k+1}', '<sub><i>k</i>+1</sub>');
  $t=tr($t, '_{i+12}', '<sub><i>k</i>+1</sub>');
  $t=tr($t, '^0', '<sup>0</sup>');
  $t=tr($t, '^2', '<sup>2</sup>');
  $t=tr($t, '^3', '<sup>3</sup>');
  $t=tr($t, '^4', '<sup>4</sup>');
  $t=tr($t, '^9', '<sup>9</sup>');
  $t=tr($t, '^{10}', '<sup>10</sup>');
  $t=tr($t, '^{17}', '<sup>17</sup>');
  $t=tr($t, '^{n-1}', '<sup><i>n</i>-1</sup>');
  $t=tr($t, '^\\ast', '*');
  $t=tr($t, '^s', '<sup><i>s</i></sup>');
  $t=tr($t, '^x', '<sup><i>x</i></sup>');
  $t=tr($t, '\\~', '&nbsp;&nbsp;&nbsp;&nbsp;');
  $t=tr($t, '^k', '<sup><i>k</i></sup>');
  $t=tr($t, '^m', '<sup><i>m</i></sup>');
  $t=tr($t, '^{-1}', '<sup>&nbsp;-1</sup>');
  $t=tr($t, '^{1000000000000}', '<sup>1000000</sup>');
  $t=tr($t, '^{#-1}', '<span style="position:relative; top:-20px;"><sup>&nbsp;-1</sup></span>');



  $t=tr($t, '#[', '</td><td><table cellpadding="0" cellspacing="0" style="display:inline;"><tr><td class="html_matrix_lft">&nbsp;</td><td><table cellpadding="0" cellspacing="0" style="font-size:12px;"><tr><td style="white-space:nowrap;">');
  $t=tr($t, '#;', '</td></tr><tr><td style="white-space:nowrap;">');
  $t=tr($t, '#,', '</td><td style="padding-left:8px; white-space:nowrap;">');
  $t=tr($t, '#]', '</td></tr></table></td><td class="html_matrix_rgt">&nbsp;</td></tr></table></td><td>');

  foreach (array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z') as $v )
    $t=tr($t,'%'.$v, '<i>'.$v.'</i>');

  foreach (array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z') as $v )
    $t=tr($t,'%'.$v, '<i>'.$v.'</i>');

  return $t;
}

function tr($t,$x,$y) {
  return str_replace($x,$y,$t);
}

//eof
?>
