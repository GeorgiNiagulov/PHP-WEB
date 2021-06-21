<?php
$teamScore = [];
$teamInfo  = [];
$pattern = ["@", "%", "$", "*", "&"];

while (true) {
  $input = readline();
  if ($input === 'Result') {
    break;
  }
  $clearedText = str_replace($pattern, "", $input);
  $data = explode('|', $clearedText);

  if(ctype_upper($data[0])) {
    $teamInfo[$data[0]][$data[1]] = intval($data[2]);
  } else {
    $teamInfo[$data[1]][$data[0]] = intval($data[2]);
  }
  
}

foreach($teamInfo as $key => $value) {
  
  $maxKey = 0;
  if(!array_key_exists($key, $teamScore)) {
    $teamScore[$key] = 0;
  }

  foreach($value as $k => $v) {
    $teamScore[$key] += $v;
    if($maxKey < $v) {
      $maxKey = $v;
    }
  }

  $keyM = array_search($maxKey, $value);
  $fixedTeamInfo[$key] = $keyM;
}
arsort($teamScore);

foreach($teamScore as $team => $score) {
  echo $team." => ".$score.PHP_EOL;
  echo "Most points scored by ".$fixedTeamInfo[$team].PHP_EOL;
}