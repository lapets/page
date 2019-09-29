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
  "exercise_phi_simple_compute",
  "exercise_CRT_general_two_solve",
  "exercise_sqrt_mod_prime_solve"
  );

function gcd($a,$b) {
    return ($a % $b) ? gcd($b,$a % $b) : $b;
}

function prime_powers($n) {
  $primes = array(2,3,5,7,11,13,17,19,23,29,31,37);
  $pps = array();
  while ($n > 1) {
    foreach ($primes as $p) {
      if ($n % $p == 0) {
        if (!array_key_exists($p, $pps))
          $pps[$p] = 0;
        $pps[$p]++;
        $n = $n / $p;
      }
    }
  }
  return $pps;
}
 
function exercise_phi_simple_compute($data) {
  $n = randomElement($data['medium composites and primes']);

  $phi = 0;
  for ($a = 0; $a < $n; $a++)
    if (gcd($a,$n) === 1)
      $phi++;
  
  $prime_powers = prime_powers($n);
  $phi_exps = array(0 => array(), 1 => array());
  foreach ($prime_powers as $p => $k) {
    if ($k == 1) {
      $phi_exps[0][] = "\phi(".$p.")";
      $phi_exps[1][] = "(".$p." %- 1)";
    } else {
      $phi_exps[0][] = "\phi(".$p."<sup>".$k."</sup>)";
      $phi_exps[1][] = "(".$p."<sup>".$k."</sup> %- ".$p."<sup>".$k." %- 1</sup>)";
    }
  }

  $exercise = '
    <text hooks="math"><![CDATA[
Compute the result of \phi('.$n.').
    ]]></text>';

  $solution = '
        <solution hooks="math"><![CDATA[
By applying a combination of the facts about computing the <a href="materials.php#363015589b5c4b168afdf08dc2b2e609">Euler totient function</a> \varphi for
<a href="materials.php#3124a3c8c9744310bbe184f41be5e8d2">prime numbers</a>,
<a href="materials.php#15f709b061db4798ab0ff29bef64f200">powers of primes</a>, and 
<a href="materials.php#da48e3ec693c4a07b4c6da648e5c1996">products of coprime numbers</a>, 
we can compute the solution as follows:
\begin{eqnarray}
  \phi('.$n.') & = & '.implode(" \cdot ", $phi_exps[0]).' %%
               & = & '.implode(" \cdot", $phi_exps[1]).' %%
               & = & '.$phi.'
\end{eqnarray}
        ]]></solution>
  ';
  return array($exercise, $solution);
}

function exercise_CRT_general_two_solve($data) {
  $n = randomElement($data['small composites and primes']);
  $m = randomElement(remove($data['small composites and primes'], $n));
  $g = gcd($m, $n);
  $x = randomInRange(0, ($m * $n / $g));
  $a = $x % $n;
  $b = $x % $m;
  $r = $x % $g;
  $exercise = '
    <text hooks="math"><![CDATA[
Solve the following system of equations:
\begin{eqnarray}
  %x & \equiv & '.($x % $n).' (\mod '.$n.') %%
  %x & \equiv & '.($x % $m).' (\mod '.$m.')
\end{eqnarray}
    ]]></text>';

  if ($g == 1) {
    $solution = '
        <solution hooks="math"><![CDATA[
Using the explicit <a href="materials.php#cdf66ebaf3a24a54a2b097be73f8a8f4">formula</a> for a Chinese remainder theorem solution for a system of two equations when the moduli are coprime, we find that the unique congruence class of solutions is:
\begin{eqnarray}
  %x & \equiv & '.$a.' \cdot ('.$m.' \cdot '.$m.'^{-1}) + '.$b.' \cdot ('.$n.' \cdot '.$n.'^{-1}) (\mod ('.$n.' \cdot '.$m.')) %%
     & \equiv & '.($x % (($n * $m) / $g)).' (\mod '.(($n * $m) / $g).')
\end{eqnarray}
        ]]></solution>
    ';
  } else {
    $solution = '
        <solution hooks="math"><![CDATA[
Using the <a href="materials.php#9713fd6d470a483cae1159e87897512b">process</a> for computing a Chinese remainder theorem solution for a system of two equations when the moduli are not necessarily coprime, we find that the unique congruence class of solutions is:
\begin{eqnarray}
  %x & \equiv & '.($x % (($n * $m) / $g)).' (\mod '.(($n * $m) / $g).')
\end{eqnarray}
        ]]></solution>
    ';
  }

  return array($exercise, $solution);
}

function exercise_sqrt_mod_prime_solve($data) {
  $p = randomElement($data['small primes 3 mod 4']);
  $r = randomInRange(1, $p);
  $solution = null;
  $attempt = pow($r,(($p+1)/4)) % $p;
  for ($x = 0; $x < $p; $x++) {
    if ((($x * $x) % $p) === $r) {
      $solution = $x;
      break;
    }
  }
  if ($solution !== null)
    $x = $solution;

  $exercise = '
    <text hooks="math"><![CDATA[
Solve the following equation:
\begin{eqnarray}
  %x^2 & \equiv & '.$r.' (\mod '.$p.')
\end{eqnarray}
    ]]></text>';
  $solution = $solution != null ?
      '<solution hooks="math"><![CDATA[
Using the <a href="materials.php#3d06a3b21e4846728ea3569d9d1d7c6f">explicit formula</a> for computing square roots of congruence classes modulo a prime, the solution is:
\begin{eqnarray}
  %x & \equiv & \pm ('.$r.')<sup>('.$p.'+1)/4</sup> (\mod '.$p.') %%
     & \equiv & \pm '.$solution.' (\mod '.$p.')
\end{eqnarray}
        ]]></solution>
      ' 
    :
      '<solution hooks="math"><![CDATA[
We attempt to use the <a href="materials.php#3d06a3b21e4846728ea3569d9d1d7c6f">explicit formula</a> for computing roots of congruence classes modulo a prime:
\begin{eqnarray}
  %x & \equiv & \pm ('.$r.')<sup>('.$p.'+1)/4</sup> (\mod '.$p.') %%
     & \equiv & \pm '.$attempt.' (\mod '.$p.') %%
  ('.$attempt.')^2 & \not\equiv & '.$r.' (\mod '.$p.')
\end{eqnarray}
Since the formula did not return a valid root, there is no solution; '.$r.' is not a quadratic residue in \Z/'.$p.'\Z]]></solution>';
  return array($exercise, $solution);
}

////////////////////////////////////////////////////////////////
// Generate the exercise.

$exercise = call_user_func(randomElement($templates), $data);

function wrapXML($link, $exercise_solution) {
  return
      '<material title="BU CAS CS 235 Fall 2013">'
    . '<section visible="false"><subsection visible="false"><exercise required="true" link="'.$link.'">'
    . $exercise_solution[0] . $exercise_solution[1]
    . '</exercise></subsection></section>'
    . '</material>';
}

////////////////////////////////////////////////////////////////
// Render the exercise as a lecture-notes-like page.

// Set the configuration parameters for the material invocation.
$material = array(
    'path' => 'material/',
    'content' => wrapXML('exercises.php?exercise='.deterministicLink(), $exercise),
    'message' => '<b>NOTE:</b> This page randomly generates an exercise and its solution. <a href="exercises.php">Click here</a> to refresh the page and generate a new exercise. Use the <b style="font-variant:small-caps; font-size:11px; font-weight:bold;">[link]</b> below if you want to return to the same exercise again at a later time. <b><a href="index.php">Click here</a></b> to go back to the main page with the course information and schedule.<br/>',
    'toc' => 'false'
  );

// Load rendering hooks.
include("material/material_math.php");

// Render the course materials in the specified XML file.
include("material/material.php");

/*eof*/?>