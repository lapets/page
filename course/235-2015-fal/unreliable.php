<?php

// Check for parameters.
if (!array_key_exists('n', $_GET) || !array_key_exists('data', $_GET)) {
  echo "Error: missing <b><code>n</code></b> and/or <b><code>data</code></b> parameters.";
  exit();
}

// Retrieve the parameters.
$n = gmp_init($_GET['n']);
$args = explode(',', $_GET['data']);
for ($i = 0; $i < count($args); $i++)
  $args[$i] = gmp_init($args[$i]);

// Decide whether to introduce errors (33% chance or error).
$r = rand(0,2);
if ($r == 1 && count($args) >= 2) // Introduce errors.
  $product = gmp_mod(gmp_init(rand(3,31321)), $n);
else // Compute correct product.
  $product = gmp_init(1);
  
foreach ($args as $arg)
  $product = gmp_mod(gmp_mul($product, $arg), $n);

echo gmp_strval(gmp_mod($product, $n));

?>