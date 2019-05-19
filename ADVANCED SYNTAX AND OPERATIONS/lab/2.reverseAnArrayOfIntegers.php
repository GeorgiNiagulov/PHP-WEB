<?php

$num = intval(readline());
$integers = [];

for ($i=0; $i < $num; $i++) { 
  $integers[] = intval(readline());
}
$reversed = array_reverse($integers);
echo implode(" ", $reversed);