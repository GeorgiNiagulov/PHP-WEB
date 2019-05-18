<?php

$n = intval(readline());
$k = intval(readline());
$numbers = array_fill(0, $n, 0);
$numbers[0] = 1;
for ($currElem=0; $currElem < count($numbers); $currElem++) { 
  $startIndex = max(0, $currElem-$k);
  $sum = 0;
  for ($i=$startIndex; $i <= $currElem; $i++) { 
    $sum += $numbers[$i];
  }
  $numbers[$currElem] = $sum;
}
echo implode(" ",$numbers);

// Sum the elements $i-$k … $i-1: seq[i] = sum(seq[i-k … i-1])