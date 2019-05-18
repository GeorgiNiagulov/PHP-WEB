<?php

$phoneNumbers = [];
while (true) {
  $input = readline();
  if ($input === "Over") {
    ksort($phoneNumbers);
    foreach ($phoneNumbers as $person => $number) {
      echo "$person -> $number".PHP_EOL;
    }
    break;
  }
  $data = explode(" : ", $input);
  $person = $data[0];
  $number = $data[1];
  
  
    if (!is_numeric($person)) {
      $phoneNumbers[$data[0]] = $data[1];
    } else {
      $phoneNumbers[$data[1]] = $data[0];
    }
}