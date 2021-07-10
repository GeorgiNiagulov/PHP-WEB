<?php

$input = explode(" ", readline());

$rows = $input[0];
$cols = $input[1];

$alphabet = range('a', 'z');

for ($i=0; $i < $rows; $i++) {
  for ($j=0; $j < $cols; $j++) { 
    echo $alphabet[$i].$alphabet[$j+$i].$alphabet[$i].' ';
  }
  echo PHP_EOL;
}