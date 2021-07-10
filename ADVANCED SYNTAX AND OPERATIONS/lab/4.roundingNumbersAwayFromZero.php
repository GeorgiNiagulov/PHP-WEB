<?php

$array = explode(" ", readline());

for ($i=0; $i < count($array); $i++) { 
  echo $array[$i]." => ".round($array[$i]).PHP_EOL;
}