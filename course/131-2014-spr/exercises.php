<?php /*********************************************************
**
** Random exercise generator.
** 
** exercises.php
**   Generates a random exercise.
*/

////////////////////////////////////////////////////////////////
//

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

////////////////////////////////////////////////////////////////
// Instantiate the random number generator, and retrieve the
// random sequence from the request, if one exists.

global $random; $random = array();
global $random_index; $random_index = 0;

if (array_key_exists('exercise', $_GET)) {
  $random = explode("a", randomDecode($_GET['exercise']));
  for ($i = 0; $i < count($random); $i++)
    $random[$i] = intval($random[$i]);
}

function remove($a, $x) {
  $b = array();
  foreach ($a as $y)
    if ($y !== $x)
      $b[] = $y;
  return $b;
}

function randomInRange($min, $max) {
  global $random;
  global $random_index;
  if (!array_key_exists($random_index, $random))
    $random[$random_index] = rand($min, $max-1);
  $x = $random[$random_index];
  $random_index++;
  return $x;
}

function randomElement($a) {
  return $a[randomInRange(0, count($a))];
}

function randomElements($a, $k) {
  if ($k <= 0)
    return array();
  else {
    $x = randomElement($a);
    $xs = randomElements(remove($a, $x), $k-1);
    $xs[] = $x;
    return $xs;
  }
}

function deterministicLink() {
  global $random;
  return randomEncode(count($random) > 0 ? implode("a", $random) : "");
}

function randomEncode($s) {
  $enc = array('a'=>'a','0'=>'b','1'=>'c','2'=>'d','3'=>'e','4'=>'f','5'=>'B','6'=>'C','7'=>'D','8'=>'E','9'=>'F');
  for ($i = 0; $i < strlen($s); $i++) $s[$i] = $enc[$s[$i]];
  return $s;
}

function randomDecode($s) {
  $dec = array('a'=>'a','b'=>'0','c'=>'1','d'=>'2','e'=>'3','f'=>'4','B'=>'5','C'=>'6','D'=>'7','E'=>'8','F'=>'9');
  for ($i = 0; $i < strlen($s); $i++) $s[$i] = $dec[$s[$i]];
  return $s;
}

////////////////////////////////////////////////////////////////
// Exercise generators.

$data = array(
    'small primes' => array(2,3,5,7,11,13),
    'medium primes' => array(2,3,5,7,11,13,17,19,23,29,31),
    'large primes' => array(2,3,5,7,11,13,17,19,23,29,31,37),
    'small primes 3 mod 4' => array(3,7,11),
    'medium primes 3 mod 4' => array(3,7,11,19,23),
    'small composites and primes' => array(2,3,4,5,6,7,8,9,10,11),
    'medium composites and primes' => array(2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30)
  );

$templates = array(
  "exercise_boolean_formula_meaning",
  "exercise_boolean_formula_solve"
  );

function show_formula($f) {
  if ($f === true ) return '\top';
  if ($f === false) return '\bot';
  if (array_key_exists('Var', $f)) return '%'.$f['Var'];
  if (array_key_exists('And', $f)) return '(' . show_formula($f['And'][0]) . ' \wedge ' . show_formula($f['And'][1]) . ')';
  if (array_key_exists('Or',  $f)) return '(' . show_formula($f['Or'][0]) . ' \vee ' . show_formula($f['Or'][1]) . ')';
  if (array_key_exists('Not', $f)) return '\neg(' . show_formula($f['Not'][0]) . ')';
  if (array_key_exists('Imp', $f)) return '(' . show_formula($f['Imp'][0]) . ' \Rightarrow ' . show_formula($f['Imp'][1]) . ')';
  if (array_key_exists('Iff', $f)) return '(' . show_formula($f['Iff'][0]) . ' \Leftrightarrow ' . show_formula($f['Iff'][1]) . ')';
  if (array_key_exists('Xor', $f)) return '(' . show_formula($f['Xor'][0]) . ' \oplus ' . show_formula($f['Xor'][1]) . ')';
}

function evaluate_formula($f, $env = null) {
  if ($f === true || $f === false) return $f;
  if (array_key_exists('Var', $f)) return $env[$f['Var']];
  if (array_key_exists('And', $f)) return evaluate_formula($f['And'][0], $env) && evaluate_formula($f['And'][1], $env);
  if (array_key_exists('Or',  $f)) return evaluate_formula($f['Or'][0], $env) || evaluate_formula($f['Or'][1], $env);
  if (array_key_exists('Not', $f)) return !evaluate_formula($f['Not'][0], $env);
  if (array_key_exists('Imp', $f)) return (!evaluate_formula($f['Imp'][0], $env)) || evaluate_formula($f['Imp'][1], $env);
  if (array_key_exists('Iff', $f)) return evaluate_formula($f['Iff'][0], $env) == evaluate_formula($f['Iff'][1], $env);
  if (array_key_exists('Xor', $f)) return evaluate_formula($f['Xor'][0], $env) != evaluate_formula($f['Xor'][1], $env);
}

function random_closed_boolean_formula() {
  $u = randomElement(array(true, false));
  $v = randomElement(array(true, false));
  $w = randomElement(array(true, false));
  $x = randomElement(array(true, false));
  $y = randomElement(array(true, false));

  $a = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));
  $b = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));
  $c = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));
  $d = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));

  $f = randomElement(
    array(
      array($a => array(array($b => array($u, $v)), array($c => array($w, $x)))),
      array($a => array($y, array('Not' => array(array($c => array($w, $x)))))),
      array($a => array(array($b => array($u, $v)), array($c => array($w, $x)))),
      array($a => array($y, array($c => array($w, $x)))),
      $y,
      array($a => array($u, $v)),
      array($b => array($u, array($c => array($v, array($d => array($w, $y)))))),
      array($a => array(array($b => array(array('Not' => array($u)), $v)), array($c => array($w, $x))))
    ));

  return $f;
}

function random_open_boolean_formula() {
  $u = randomElement(array(true, false, array('Var' => 'x'), array('Var' => 'y')));
  $v = randomElement(array(true, false, array('Var' => 'x'), array('Var' => 'y')));
  $w = randomElement(array(true, false, array('Var' => 'x'), array('Var' => 'y')));
  $x = randomElement(array(true, false, array('Var' => 'x'), array('Var' => 'y')));
  $y = randomElement(array(true, false, array('Var' => 'x'), array('Var' => 'y')));

  $a = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));
  $b = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));
  $c = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));
  $d = randomElement(array('And', 'Or', 'Xor', 'Imp', 'Iff'));

  $f = randomElement(
    array(
      array('Iff' => array(array('Var' => 'x'), array('Var' => 'y'))),
      array($a => array(array($b => array(array('Var' => 'x'), $v)), array($c => array($w, $x)))),
      array($a => array($y, array('Not' => array(array($c => array($w, array('Var' => 'x'))))))),
      array($a => array(array($b => array($u, array('Var' => 'x'))), array($c => array($w, $x)))),
      array($a => array($y, array($c => array($w, array('Var' => 'x'))))),
      $y,
      array($a => array($u, array('Var' => 'y'))),
      array($b => array($u, array($c => array(array('Var' => 'x'), array($d => array($w, $y)))))),
      array($a => array(array($b => array(array('Not' => array(array('Var' => 'x'))), $v)), array($c => array($w, $x))))
    ));

  return $f;
}
 
function exercise_boolean_formula_meaning($data) {
  $f = random_closed_boolean_formula();

  $exercise = '
    <text hooks="math"><![CDATA[
Determine the meaning of the formula:
\begin{eqnarray}
'.show_formula($f).'.
\end{eqnarray}
    ]]></text>';

  $solution = '
        <solution hooks="math"><![CDATA[
The meaning of the above formula is '.show_formula(evaluate_formula($f)).'.
        ]]></solution>
  ';
  return array($exercise, $solution);
}

function exercise_boolean_formula_solve($data) {
  $f = random_open_boolean_formula();

  $exercise = '
    <text hooks="math"><![CDATA[
Determine what combinations of values for %x and %y make the following formula true:
\begin{eqnarray}
'.show_formula($f).'.
\end{eqnarray}
    ]]></text>';

  $envs = array(
      array('x' => true,  'y' => true),
      array('x' => true,  'y' => false),
      array('x' => false, 'y' => true),
      array('x' => false, 'y' => false)
    );

  $sols = array();
  foreach ($envs as $env)
    if (evaluate_formula($f, $env) === true)
      $sols[] = '%x = ' . show_formula($env['x']) . ' and ' . '%y = ' . show_formula($env['y']);

  if (count($sols) == 0)
    $solution = '
        <solution hooks="math"><![CDATA[
No assignment makes the formula true.
        ]]></solution>
    ';
  else
    $solution = '
        <solution hooks="math"><![CDATA[
The following assignments make the formula true:
\begin{eqnarray}
'. implode(" \\\\ \n", $sols) .'
\end{eqnarray}
        ]]></solution>
    ';  

  return array($exercise, $solution);
}

////////////////////////////////////////////////////////////////
// Generate the exercise.

$exercise = call_user_func(randomElement($templates), $data);

function wrapXML($link, $exercise_solution) {
  return
      '<material title="BU CAS CS 131 Spring 2014">'
    . '<section visible="false"><subsection visible="false"><exercise required="true" link="'.$link.'">'
    . $exercise_solution[0] . $exercise_solution[1]
    . '</exercise></subsection></section>'
    . '</material>';
}

////////////////////////////////////////////////////////////////
// Render the exercise as a lecture-notes-like page.

// Load the library and rendering hooks.
include("material/material.php");
include("material/material_math.php");
include("material/material_Python.php");

// Build the course material data structure instance by setting
// the configuration parameters for the material invocation.
$m = new Material(
       array(
          'path' => 'material/',
          'content' => wrapXML('exercises.php?exercise='.deterministicLink(), $exercise),
          'message' => '<b>NOTE:</b> This page randomly generates an exercise and its solution. <a href="exercises.php">Click here</a> to refresh the page and generate a new exercise. Use the <b style="font-variant:small-caps; font-size:11px; font-weight:bold;">[link]</b> below if you want to return to the same exercise again at a later time. <b><a href="index.php">Click here</a></b> to go back to the main page with the course information and  schedule.<br/>',
          'toc' => 'false'
        )
      );

// Render the course materials in the specified XML file.
$m->html(); 

/* eof */ ?>