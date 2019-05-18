<?php

$productName = [];
$input = readline();
while ($input !== "shopping time") {
  $input = explode(" ", $input);
  $product = $input[1];
  $quantity = intval($input[2]);
  
  if (!key_exists($product, $productName)) {
    $productName[$product] = $quantity;
  } else {
    $productName[$product] += $quantity;
  }
  $input = readline();
}
while (true) {
  $input = readline();
  if ($input == "exam time") {
    break;
  }
  $input = explode(" ", $input);
  $buyedProduct = $input[1];
  $buyedQty = intval($input[2]);
  if (!key_exists($buyedProduct, $productName)) {
    echo "$buyedProduct doesn't exist".PHP_EOL;
  } else {
    if ($productName[$buyedProduct] > 0) {
      $productName[$buyedProduct] -= $buyedQty;
    } else {
      echo "$buyedProduct out of stock".PHP_EOL;
    }
  }
}
foreach ($productName as $product => $quantity) {
  if ($quantity > 0) {
    echo "$product -> $quantity".PHP_EOL;
  }
}