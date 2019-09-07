<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="all" name="robots" />
    <title>andrei lapets - bibliography</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" />
    <link rel="stylesheet" href="al.css" />
  </head>
  <body>
    <div id="bibtex">
<?php
$raw = trim(file_get_contents('lapets.bib.js'));
$raw = str_replace("var bib = \n", "", $raw);
$raw = rtrim($raw, ";");
$json = json_decode($raw, true);
$docs = $json['documents'];
for ($i = 0; $i < count($docs); $i++) {
    foreach ($docs[$i] as $kind => $data) {
        if (in_array($kind, array('@misc', '@techreport', '@phdthesis', '@inproceedings', '@article'))) {
            foreach ($docs[$i][$kind] as $id => $fields) {
                echo "\n";
                echo '      <div>' . "\n";
                echo '      <a id="' . $id . '"></a>' . "\n";
                echo '      ' . $kind . '{' . $id . ',' . "\n";
                foreach ($docs[$i][$kind][$id] as $field => $value) {
                    if ($field == 'abstract')
                        echo ''; //'        <span>&nbsp;&nbsp;' . $field . ' = {<div>' . $value . '</div>&nbsp;&nbsp;},</span>' . "\n";
                    else
                        echo '        <span>&nbsp;&nbsp;' . $field . ' = {' . $value . '},</span>' . "\n";
                }
            }
            echo '      }<br/><br/>' . "\n" . '      </div>' . "\n";
        }
    }
}
echo "\n";
?>
    </div>
  </body>
</html>