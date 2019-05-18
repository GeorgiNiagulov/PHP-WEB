<?php

$seq = explode(" ", readline());

$maxCount = 0;
$startIndex = 0;

for ($row=0; $row < count($seq); $row++) { 
  $currentCount = 0;
  for ($col=$row; $col < count($seq)-1; $col++) { 
    if ($seq[$col] < $seq[$col+1]) {
      $currentCount++;
      if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
        $startIndex = $row;
      }
    } else {
      break;
    }
  }
}
for ($i=0; $i <= $maxCount; $i++) { 
  echo $seq[$startIndex+$i]." ";
}