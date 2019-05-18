<?php

$phoneNumbers = [];
while (true) {
    $input = readline();
    if ($input === "END") {
        break;
    }
    if ($input === "ListAll") {
      foreach ($phoneNumbers as $person => $number) {
        echo "$person -> $number".PHP_EOL;
      }
    }
    $input = explode(" ", $input);
    $command = $input[0];
    switch ($command) {
        case 'A':
            $phoneNumbers[$input[1]] = $input[2];
            ksort($phoneNumbers);
            break;
        case 'S':
            if (array_key_exists($input[1], $phoneNumbers)) {
              printf("%s -> %s".PHP_EOL,$input[1], $phoneNumbers[$input[1]]);
            } else {
              echo "Contact $input[1] does not exist.".PHP_EOL;
            }
            break;
    }
}