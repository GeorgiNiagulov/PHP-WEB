<?php

$seq = explode(" ", readline());

// $mostFrequent = $seq[0];
// $count = 1;
// for ($i=0; $i < count($seq) ; $i++) { 
//   $currentCount = 0;
//   if ($mostFrequent == $seq[$i] && $mostFrequent >= 0) {
//     $currentCount++;
//   }
//   if ($count < $currentCount) {
//     $mostFrequent = $seq[$i];
//   }
// }
// echo $mostFrequent;

$maxCount = 0;
$number = '';
for ($row=0; $row < count($seq); $row++) { 
  $currentCount = 0;
  for ($col=0; $col < count($seq); $col++) { 
    if ($seq[$row] == $seq[$col]) {
      $currentCount++;
      if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
        $number = $seq[$row];
      }
    }
  }
}
echo $number;