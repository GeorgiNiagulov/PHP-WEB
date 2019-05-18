<?php

$seq = explode(" ", readline());

$maxCount = 0;
$number = '';

for ($row=0; $row < count($seq); $row++) { 
  $currentCount = 0;
  for ($col=$row; $col < count($seq); $col++) { 
    if ($seq[$row] == $seq[$col]) {
      $currentCount++;
      if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
        $number = $seq[$row];
      }
    } else {
      break;
    }
  }
}
for ($i=0; $i < $maxCount; $i++) { 
  echo $number." ";
}