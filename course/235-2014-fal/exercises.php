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

function rangeFromTo($min, $max) {
  $r = array();
  for ($i = $min; $i < $max; $i++)
    $r[] = $i;
  return $r;
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
  $i = randomInRange(0, count($a));
  if (!array_key_exists($i, $a))
    return null;
  return $a[$i];
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

function coprimeFactors($l, $m, $a) {
  $r = array();
  foreach ($l as $k)
    if (gcd($m, $k) == 1 && $a % $k == 0)
      $r[] = $k;
  return $r;
}

function coprimes($l, $m) {
  $r = array();
  foreach ($l as $k)
    if (gcd($m, $k) == 1)
      $r[] = $k;
  return $r;
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
    'medium composites and primes' => array(2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30),
    'medium composites' => array(4,6,8,9,10,12,14,15,16,18,20,21,22,24,25,26,27,28,30)
  );

$templates = array(
  "exercise_equation_prime_modulus",
  "exercise_equation_fermat_little_theorem",
  "exercise_phi_simple_compute",
  "exercise_CRT_coprime_two_solve",
  "exercise_CRT_coprime_two_solve",
  "exercise_CRT_general_two_solve",
  "exercise_CRT_general_two_solve",
  "exercise_CRT_general_two_solve",
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

function exercise_equation_prime_modulus($data) {
  $c = null;
  while ($c == null) {
    $m = randomElement($data['medium composites and primes']);
    $d = randomElement($data['medium composites']);
    $b = randomInRange(1, $d);
    $c = randomElement(coprimeFactors(rangeFromTo(2,$m), $m, $d));
  }
  
  $a = ($d + $b) % $m;

  $solution = $d / $c;
  $x = $solution;
  
  $e = (($a - $b) % $m);
  while ($e < 0)
    $e = $e + $m;

  $exercise = '
    <text hooks="math"><![CDATA[
Solve the following equation:
\begin{eqnarray}
  '.$c.' \cdot %x + '.$b.' & \equiv & '.$a.' (\mod '.$m.')
\end{eqnarray}
    ]]></text>';
  $solution =
      '<solution hooks="math"><![CDATA[
The solution is:
\begin{eqnarray}
  '.$c.' \cdot  %x & \equiv & '.$a.' %- '.$b.' (\mod '.$m.') %%
  '.$c.' \cdot  %x & \equiv & '.(($a - $b) % $m).' %%
  '.$c.' \cdot  %x & \equiv & '.$e.' %%
  '.$c.' \cdot  %x & \equiv & '.$d.' %%
                %x & \equiv & '.($d/$c).'
\end{eqnarray}
        ]]></solution>
      ';
  return array($exercise, $solution);
}

function exercise_equation_fermat_little_theorem($data) {
  $p = randomElement($data['large primes']);
  $a = randomElement(rangeFromTo(1,$p));
  $e = $p-1;

  $exercise = '
    <text hooks="math"><![CDATA[
Solve the following equation for %x \in \Z/'.$p.'\Z:
\begin{eqnarray}
  %x & \equiv & '.$a.'<sup>'.$e.'</sup> (\mod '.$p.')
\end{eqnarray}
    ]]></text>';
  $solution =
      '<solution hooks="math"><![CDATA[
Using <a href="s.php?#e7d7dd05b62144f1a68b78d34d9e268a">Fermat\'s little theorem</a>, the solution is:
\begin{eqnarray}
  %x & \equiv & '.$a.'<sup>('.$p.' %- 1)</sup> (\mod '.$p.') %%
     & \equiv & 1
\end{eqnarray}
        ]]></solution>
      ';
  return array($exercise, $solution);
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
By applying a combination of the facts about computing the <a href="s.php#363015589b5c4b168afdf08dc2b2e609">Euler totient function</a> \varphi for
<a href="s.php#3124a3c8c9744310bbe184f41be5e8d2">prime numbers</a>,
<a href="s.php#15f709b061db4798ab0ff29bef64f200">powers of primes</a>, and 
<a href="s.php#da48e3ec693c4a07b4c6da648e5c1996">products of coprime numbers</a>, 
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

function exercise_CRT_coprime_two_solve($data) {
  $n = randomElement(remove($data['small composites and primes'], 2));
  //$m = randomElement(remove($data['small composites and primes'], $n));
  $m = randomElement(coprimes(rangeFromTo(2,$n), $n));
  $g = gcd($m, $n);
  $x = randomInRange($m, ($m * $n / $g));
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
Using the explicit <a href="s.php#cdf66ebaf3a24a54a2b097be73f8a8f4">formula</a> for a Chinese remainder theorem solution for a system of two equations when the moduli are coprime, we find that the unique congruence class of solutions is:
\begin{eqnarray}
  %x & \equiv & '.$a.' \cdot ('.$m.' \cdot '.$m.'^{-1}) + '.$b.' \cdot ('.$n.' \cdot '.$n.'^{-1}) (\mod ('.$n.' \cdot '.$m.')) %%
     & \equiv & '.($x % (($n * $m) / $g)).' (\mod '.(($n * $m) / $g).')
\end{eqnarray}
        ]]></solution>
    ';
  } else {
    $solution = '
        <solution hooks="math"><![CDATA[
Using the <a href="s.php#9713fd6d470a483cae1159e87897512b">process</a> for computing a Chinese remainder theorem solution for a system of two equations when the moduli are not necessarily coprime, we find that the unique congruence class of solutions is:
\begin{eqnarray}
  %x & \equiv & '.($x % (($n * $m) / $g)).' (\mod '.(($n * $m) / $g).')
\end{eqnarray}
        ]]></solution>
    ';
  }

  return array($exercise, $solution);
}

function exercise_CRT_general_two_solve($data) {
  $n = randomElement($data['small composites and primes']);
  $m = randomElement(remove($data['small composites and primes'], $n));
  $g = gcd($m, $n);
  $x = randomInRange($m, ($m * $n / $g));
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
Using the explicit <a href="s.php#cdf66ebaf3a24a54a2b097be73f8a8f4">formula</a> for a Chinese remainder theorem solution for a system of two equations when the moduli are coprime, we find that the unique congruence class of solutions is:
\begin{eqnarray}
  %x & \equiv & '.$a.' \cdot ('.$m.' \cdot '.$m.'^{-1}) + '.$b.' \cdot ('.$n.' \cdot '.$n.'^{-1}) (\mod ('.$n.' \cdot '.$m.')) %%
     & \equiv & '.($x % (($n * $m) / $g)).' (\mod '.(($n * $m) / $g).')
\end{eqnarray}
        ]]></solution>
    ';
  } else {
    $solution = '
        <solution hooks="math"><![CDATA[
Using the <a href="s.php#9713fd6d470a483cae1159e87897512b">process</a> for computing a Chinese remainder theorem solution for a system of two equations when the moduli are not necessarily coprime, we find that the unique congruence class of solutions is:
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
Using the <a href="s.php#3d06a3b21e4846728ea3569d9d1d7c6f">explicit formula</a> for computing square roots of congruence classes modulo a prime, the solution is:
\begin{eqnarray}
  %x & \equiv & \pm ('.$r.')<sup>('.$p.'+1)/4</sup> (\mod '.$p.') %%
     & \equiv & \pm '.$solution.' (\mod '.$p.')
\end{eqnarray}
        ]]></solution>
      ' 
    :
      '<solution hooks="math"><![CDATA[
We attempt to use the <a href="s.php#3d06a3b21e4846728ea3569d9d1d7c6f">explicit formula</a> for computing roots of congruence classes modulo a prime:
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
      '<sheaf title="BU CAS CS 235 Spring 2014">'
    . '<section visible="false"><subsection visible="false"><exercise required="true" link="'.$link.'">'
    . $exercise_solution[0] . $exercise_solution[1]
    . '</exercise></subsection></section>'
    . '</sheaf>';
}

////////////////////////////////////////////////////////////////
// Render the exercise as a lecture-notes-like page.

// Load the library and rendering hooks.
include("sheaf/sheaf.php");
include("sheaf/hooks/math.php");
include("sheaf/hooks/Python.php");

// Build the course material data structure instance by setting
// the configuration parameters for the material invocation.
$s = new Sheaf(
       array(
          'path' => 'sheaf/',
          'content' => wrapXML('exercises.php?exercise='.deterministicLink(), $exercise),
          'message' => '<b>NOTE:</b> This page randomly generates an exercise and its solution. <a href="exercises.php">Click here</a> to refresh the page and generate a new exercise. Use the <b style="font-variant:small-caps; font-size:11px; font-weight:bold;">[link]</b> below if you want to return to the same exercise again at a later time. <b><a href="index.php">Click here</a></b> to go back to the main page with the course information and  schedule.<br/>',
          'toc' => 'false'
        )
      );

// Render the course materials in the specified XML file.
$s->html(); 

/* eof */ ?>