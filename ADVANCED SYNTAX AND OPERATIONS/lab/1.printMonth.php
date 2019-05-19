<?php

$selectedMonth = intval(readline());

$months = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"];

if ($selectedMonth > 0 && $selectedMonth < 13) {
  foreach ($months as $value => $month) {
    if ($selectedMonth-1 == $value) {
      echo $month;
    }
  }
} else {
  echo "Invalid Month!";
}
