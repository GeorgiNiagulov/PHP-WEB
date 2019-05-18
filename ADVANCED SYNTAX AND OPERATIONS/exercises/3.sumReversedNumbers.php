<?php

// $input = explode(" ", readline());
// $sum = 0;

// foreach ($input as $int) {
//   $reversed = strrev($int);
//   $sum+=$reversed;
// }
// echo $sum;

echo array_reduce(
  explode(" ", readline()),
  function($sum, $el){
    return $sum += intval(strrev($el));
}, 
0
);