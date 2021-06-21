<?php
$employeesInfo = [];

while(true) {
  $input = trim(readline());
  if($input == "filter base") {
    break;
  }

  $data = explode(" -> ", $input);
  if(filter_var($data[1], FILTER_VALIDATE_INT)) {
    $employeesInfo['age'][$data[0]] = [intval($data[1])];
  } elseif(filter_var($data[1], FILTER_VALIDATE_FLOAT)) {
    $employeesInfo['salary'][$data[0]] = [floatval($data[1])];
  } elseif(is_string($data[1])) {
    $employeesInfo['position'][$data[0]] = [$data[1]];
  }

}
$command = trim(readline());

foreach($employeesInfo as $key => $value) {
  if ($command == 'Age' && $key == 'age') {
    foreach($value as $name => $age) {
      echo "Name: ".$name[0].PHP_EOL;
      echo "Age: ".$age.PHP_EOL;
      echo "====================".PHP_EOL;
    }
  } elseif ($command == 'Salary' && $key == 'salary') {
    foreach($value as $name => $salary) {
      echo "Name: ".$name.PHP_EOL;
      echo "Salary: ".number_format(round($salary[0], 2), 2,'.','').PHP_EOL;
      echo "====================".PHP_EOL;
    }
  } elseif ($command == 'Position' && $key == 'position') {
    foreach($value as $name => $position) {
      echo "Name: ".$name.PHP_EOL;
      echo "Position: ".$position[0].PHP_EOL;
      echo "====================".PHP_EOL;
    }
  }
}