<?php
$integers = array_map("intval", explode(" ", readline()));

while (count($integers)>1) {
  $condensed = array_fill(0, count($integers) - 1, 0);
  for ($i=0; $i < count($condensed); $i++) { 
    $condensed[$i] = $integers[$i] + $integers[$i+1];
  }
  $integers = $condensed;
}
echo $integers[0];