<?php

$integers = array_map("intval", explode(" ", readline()));
for ($i=0; $i < count($integers)-2; $i++) { 
  if ($integers[$i]+$integers[$i+1] == $integers[$i+2]) {
    $a = $integers[$i];
    $b = $integers[$i+1];
    $c = $integers[$i+2];
    printf("%d + %d == %d ".PHP_EOL,$a,$b,$c);
  } else {
    echo "no".PHP_EOL;
  }
}