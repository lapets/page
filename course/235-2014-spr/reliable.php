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

$product = gmp_init(1);  
foreach ($args as $arg)
  $product = gmp_mod(gmp_mul($product, $arg), $n);

echo gmp_strval(gmp_mod($product, $n));

?>