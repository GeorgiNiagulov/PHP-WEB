<?php

$logins = [];
$count = 0;
$input = readline();
while ($input !== "login") {
  $data = explode(" -> ", $input);
  $username = $data[0];
  $password = $data[1];
  $logins[$username] = $password;
  $input = readline();
} 
while (true) {
  $input = readline();
  if ($input == "end") {
    echo "unsuccessful login attempts: $count".PHP_EOL;
    break;
  }
  $input = explode(" -> ", $input);
  $usernameLog = $input[0];
  $passwordLog = $input[1];
  if (key_exists($usernameLog, $logins) && $logins[$usernameLog]==$passwordLog) {
    echo "$usernameLog: logged in successfully".PHP_EOL;
  } else {
    echo "$usernameLog: login failed".PHP_EOL;
    $count++;
  }
}

