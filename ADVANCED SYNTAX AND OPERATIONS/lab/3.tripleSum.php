<?php

$integers = array_map("intval", explode(" ", readline()));
$isSum = false;
for ($i = 0; $i < count($integers); $i++) {
    for ($j = $i+1; $j < count($integers); $j++) {
        for ($k = 0; $k < count($integers); $k++) {
            if ($integers[$i]+$integers[$j] == $integers[$k]) {
              echo "$integers[$i] + $integers[$j] == $integers[$k]".PHP_EOL;
              $isSum = true;
              break;
            } 
        }
    }
}
if ($isSum == false) {
  echo "No";
}
