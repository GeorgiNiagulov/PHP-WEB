<?php

$firstArr = explode(" ", readline());
$secondArr = explode(" ", readline());

$len1 = count($firstArr);
$len2 = count($secondArr);

$countElem = max($len1, $len2);

for ($i=0; $i < $countElem; $i++) { 
  echo $sum = $firstArr[$i%$len1] + $secondArr[$i%$len2]." ";
}