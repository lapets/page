<?php

// formats.php

function format_argument_as_source($t) {
  
  $t=tr($t,'%[', '');
  $t=tr($t,'%]', '');
  $t=tr($t,'\\~', '  ');
  $t=tr($t, "#,", ",");
  foreach (array('=','\\subset','\\in','<','>',"\\leq","\\geq","\\sim","iff","\\~","\\vdots","\\neq",":=","\\equiv","\\cong","\\Leftrightarrow") as $rel)
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
  foreach (array('','\\Leftrightarrow','=','\\subset','\\in','<','>',"\\leq","\\geq","\\sim","iff","\\~","\\vdots","\\neq",":=","\\mapsto","\\not\\in","\\equiv","\\cong","|","\\approx") as $rel)
    $t=tr($t,'& '.$rel.' &', '<td></tr></table></td><td> '.$rel.' </td><td><table style="white-space:nowrap;"><tr><td style="white-space:nowrap;">');
  $t=tr($t,'\\\\', '</td></tr></table></td></tr><tr><td style="text-align:right;"><table style="width:100%;"><tr><td style="text-align:right;">');
  $t=tr($t,'\\end{eqnarray}', '</td></tr></table></td></tr></table>');


  $t=tr($t,'\\begin{tabular}', '<table><tr><td style="text-align:right;">');
  $t=tr($t,'\\end{tabular}', '</td></tr></table>');
 
  $t=tr($t, '\\ddx', '</td><td><table cellpadding="0" cellspacing="0" style="display:inline;"><tr><td >&nbsp;</td><td><table cellpadding="0" cellspacing="0" style="font-size:12px;"><tr><td style="white-space:nowrap; border-bottom:1px solid #000000;">'
                     . '<i>d</i>'. '</td></tr><tr><td style="white-space:nowrap;">'
                     . '<i>dx</i>' . '</td></tr></table></td><td>&nbsp;</td></tr></table></td><td>');
 
  $t=tr($t, '\\mapsto', '&#x21A6;');
  $t=tr($t, '_{%n/%g}', '<sub><i>n</i>/<i>g</i></sub>');
  $t=tr($t, '_{%m/%g}', '<sub><i>m</i>/<i>g</i></sub>');
  $t=tr($t, '_{%n \cdot %m/%g^2}', '<sub><i>n</i>&sdot;<i>m</i>/<i>g</i><sup>2</sup></sub>');
  $t=tr($t, '_{%n \cdot %m/%g}', '<sub><i>n</i>&sdot;<i>m</i>/<i>g</i></sub>');
  $t=tr($t, '_{(4 \cdot 6)/2}', '<sub>(<i>4</i>&sdot;<i>6</i>)/<i>2</i></sub>');
  $t=tr($t, '_{%m \\cdot %n}', '<sub><i>m</i>&sdot;<i>n</i></sub>');
  $t=tr($t, '_{%n \\cdot %m}', '<sub><i>n</i>&sdot;<i>m</i></sub>');
  $t=tr($t, '^{\phi(%m)}', '<sup>&phi;(<i>%m</i>)</sup>');
  $t=tr($t, '^{\phi(%p)}', '<sup>&phi;(<i>%p</i>)</sup>');
  $t=tr($t, '^{\phi(%n)}', '<sup>&phi;(<i>%n</i>)</sup>');
  $t=tr($t, '^{\phi(5)-1}', '<sup>&phi;(5)-1</sup>');
  $t=tr($t, '^{\phi(10)-1}', '<sup>&phi;(10)-1</sup>');
  $t=tr($t, '^{\phi(21)-1}', '<sup>&phi;(21)-1</sup>');
  $t=tr($t, '^{\phi(%a+1)-1}', '<sup>&phi;(<i>a</i>+1)-1</sup>');
  $t=tr($t, '^{\phi(%a \cdot %b)-1}', '<sup>&phi;(<i>a</i>&sdot;<i>b</i>)-1</sup>');
  $t=tr($t, '^{((5-1) \cdot (2-1)) - 1}', '<sup>((5-1)&sdot;(2-1))-1</sup>');
  $t=tr($t, '^{((7-1) \cdot (3-1)) - 1}', '<sup>((7-1)&sdot;(3-1))-1</sup>');
  $t=tr($t, '^{\phi(%m) \cdot %k}', '<sup>&phi;(<i>%m</i>) &sdot; <i>k</i></sup>');
  $t=tr($t, '^{1 + \phi(%m) \cdot %k}', '<sup>1 + &phi;(<i>%m</i>) &sdot; <i>k</i></sup>');
  $t=tr($t, '^{\phi(%n) \cdot %k}', '<sup>&phi;(<i>n</i>) &sdot; <i>k</i></sup>');
  $t=tr($t, '^{1 + \phi(%n) \cdot %k}', '<sup>1 + &phi;(<i>n</i>) &sdot; <i>k</i></sup>');
  $t=tr($t, '^{\phi(%m)-1}', '<sup>&phi;(<i>%m</i>)-1</sup>');
  $t=tr($t, '^{%z_2}', '<sup><i>z</i><sub>2</sub></sup>');
  $t=tr($t, '^{\\log(%y)}', '<sup>log(<i>y</i>)</sup>');
  $t=tr($t, '\\varepsilon', '&epsilon;');
  $t=tr($t, '\\lambda', '&lambda;');
  $t=tr($t, '\\delta', '&delta;');
  $t=tr($t, '\\vdots', '&#8942;');
  $t=tr($t, '\\forall', '&forall;');
  $t=tr($t, '\\span', 'span');
  $t=tr($t, '\\log', 'log');
  $t=tr($t, '\\ln', 'ln');
  $t=tr($t, '\\mod', 'mod');
  $t=tr($t, '\\emptyset', '&empty;');
  $t=tr($t, '\\neg', '&not;');
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
  $t=tr($t, '\\R^6', '<b>R</b><sup>6</sup>');
  $t=tr($t, '\\R^n', '<b>R</b><sup><i>n</i></sup>');
  $t=tr($t, '^\\top', '<sup>&#8868;</sup>');
  $t=tr($t, '^\\bot', '<sup>&perp;</sup>');
  $t=tr($t, '\\R', '<b>R</b>'); //&#8477;
  $t=tr($t, '\\Q', '<b>Q</b>');
  $t=tr($t, '\\Z', '<b>Z</b>');
  $t=tr($t, '\\N', '<b>N</b>');
  $t=tr($t, '\\I', '<b>I</b>');
  $t=tr($t, '\\0', '<b>0</b>');
  $t=tr($t, '\\1', '<b>1</b>');
  $t=tr($t, '\\pm', '&plusmn;');
  $t=tr($t, '\\gcd', 'gcd');
  $t=tr($t, '\\max', 'max');
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
  $t=tr($t, '\\not\\equiv', '&#8802;');
  $t=tr($t, '\\equiv', '&equiv;');
  $t=tr($t, '\\cong', '&cong;');
  $t=tr($t, '\\approx', '&approx;');
  $t=tr($t, '\\lfloor', '&lfloor;');
  $t=tr($t, '\\rfloor', '&rfloor;');
  $t=tr($t, '\\lceil', '&lceil;');
  $t=tr($t, '\\rceil', '&rceil;');
  $t=tr($t, '\\phi', '&phi;');
  $t=tr($t, '\\in', '<span style="font-size:12px;">&#8712;</span>');
  $t=tr($t, '\\rightarrow', '<span style="font-size:12px;">&#8594;</span>');
  $t=tr($t, '\\Leftrightarrow', '<span style="font-size:12px;">&#8660;</span>');
  $t=tr($t, '\\lozenge', '<span style="font-size:14px;">&#9674;</span>');
  $t=tr($t, '\\i', '<b>i</b>');
  $t=tr($t, '_0', '<sub>0</sub>');
  $t=tr($t, '_1', '<sub>1</sub>');
  $t=tr($t, '_2', '<sub>2</sub>');
  $t=tr($t, '_3', '<sub>3</sub>');
  $t=tr($t, '_4', '<sub>4</sub>');
  $t=tr($t, '_5', '<sub>5</sub>');
  $t=tr($t, '_6', '<sub>6</sub>');
  $t=tr($t, '_7', '<sub>7</sub>');
  $t=tr($t, '_8', '<sub>8</sub>');
  $t=tr($t, '_{32}', '<sub>32</sub>');
  $t=tr($t, '_{ij}', '<sub><i>ij</i></sub>');
  $t=tr($t, '_{i-1}', '<sub><i>i</i>-1</sub>');
  $t=tr($t, '_{ii}', '<sub><i>ii</i></sub>');
  $t=tr($t, '_{jj}', '<sub><i>jj</i></sub>');
  $t=tr($t, '_{ji}', '<sub><i>ji</i></sub>');
  $t=tr($t, '_%n', '<sub><i>n</i></sub>');
  $t=tr($t, '_%m', '<sub><i>m</i></sub>');
  $t=tr($t, '_%k', '<sub><i>k</i></sub>');
  $t=tr($t, '_{%k}', '<sub><i>k</i></sub>');
  $t=tr($t, '_{%g}', '<sub><i>g</i></sub>');
  $t=tr($t, '_{%i}', '<sub><i>i</i></sub>');
  $t=tr($t, '_{%j}', '<sub><i>j</i></sub>');
  $t=tr($t, '_%N', '<sub><i>N</i></sub>');
  $t=tr($t, '_%n', '<sub><i>n</i></sub>');
  $t=tr($t, '_V', '<sub><i>V</i></sub>');
  $t=tr($t, '_W', '<sub><i>W</i></sub>');
  $t=tr($t, '_B', '<sub><i>B</i></sub>');
  $t=tr($t, '_%i', '<sub><i>i</i></sub>');
  $t=tr($t, '_%j', '<sub><i>j</i></sub>');
  $t=tr($t, '_{%m}', '<sub><i>m</i></sub>');
  $t=tr($t, '_{i=1}', '<sub><i>i</i> = 1</sub>');
  $t=tr($t, '_{k+1}', '<sub><i>k</i>+1</sub>');
  $t=tr($t, '_{%n-1}', '<sub><i>n</i>-1</sub>');
  $t=tr($t, '_{i+12}', '<sub><i>k</i>+1</sub>');
  $t=tr($t, '^{%i}', '<sup><i>i</i></sup>');
  $t=tr($t, '^{%k-1}', '<sup><i>k</i>-1</sup>');
  $t=tr($t, '^{%k+1}', '<sup><i>k</i>+1</sup>');
  $t=tr($t, '^{%a \\cdot %b}', '<sup><i>a</i>&sdot;<i>b</i></sup>');
  $t=tr($t, '^{%k}', '<sup><i>k</i></sup>');
  $t=tr($t, '^{%a}', '<sup><i>a</i></sup>');
  $t=tr($t, '^{%b}', '<sup><i>b</i></sup>');
  $t=tr($t, '^{%c}', '<sup><i>c</i></sup>');
  $t=tr($t, '^{%d}', '<sup><i>d</i></sup>');
  $t=tr($t, '^{%e}', '<sup><i>e</i></sup>');
  $t=tr($t, '^{%y}', '<sup><i>y</i></sup>');
  $t=tr($t, '^0', '<sup>0</sup>');
  $t=tr($t, '^1', '<sup>1</sup>');
  $t=tr($t, '^2', '<sup>2</sup>');
  $t=tr($t, '^3', '<sup>3</sup>');
  $t=tr($t, '^4', '<sup>4</sup>');
  $t=tr($t, '^5', '<sup>5</sup>');
  $t=tr($t, '^6', '<sup>6</sup>');
  $t=tr($t, '^7', '<sup>7</sup>');
  $t=tr($t, '^8', '<sup>8</sup>');
  $t=tr($t, '^9', '<sup>9</sup>');
  $t=tr($t, '_{15}', '<sub>15</sub>');
  $t=tr($t, '^{10}', '<sup>10</sup>');
  $t=tr($t, '^{11}', '<sup>11</sup>');
  $t=tr($t, '^{16}', '<sup>16</sup>');
  $t=tr($t, '^{17}', '<sup>17</sup>');
  $t=tr($t, '^{20}', '<sup>20</sup>');
  $t=tr($t, '^{21}', '<sup>21</sup>');
  $t=tr($t, '^{25}', '<sup>25</sup>');
  $t=tr($t, '^{8*32}', '<sup>8 &sdot; 32</sup>');
  $t=tr($t, '^{256}', '<sup>256</sup>');
  $t=tr($t, '^{2047}', '<sup>2047</sup>');
  $t=tr($t, '^{2048}', '<sup>2048</sup>');
  $t=tr($t, '^{1000}', '<sup>1000</sup>');
  $t=tr($t, '^{10000}', '<sup>10000</sup>');
  $t=tr($t, '^{%d+1}', '<sup><i>d</i>+1</sup>');
  $t=tr($t, '^{%d/2}', '<sup><i>d</i>/2</sup>');
  $t=tr($t, '^{%n}', '<sup><i>n</i></sup>');
  $t=tr($t, '^{%m}', '<sup><i>m</i></sup>');
  $t=tr($t, '^{%n-1}', '<sup><i>n</i>-1</sup>');
  $t=tr($t, '^{%p-1}', '<sup><i>p</i>-1</sup>');
  $t=tr($t, '^{%m-1}', '<sup><i>m</i>-1</sup>');
  $t=tr($t, '^{%n/2}', '<sup><i>n</i>/2</sup>');
  $t=tr($t, '^{1/2}', '<sup>1/2</sup>');
  $t=tr($t, '^\\ast', '*');
  $t=tr($t, '^s', '<sup><i>s</i></sup>');
  $t=tr($t, '^{32}', '<sup>32</sup>');
  $t=tr($t, '^{%z}', '<sup><i>z</i></sup>');
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
