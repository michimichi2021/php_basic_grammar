<?php

$signal = 'pink';

// if ($signal == 'red') {
//   echo 'Stop!' . PHP_EQL;
// } elseif ($signal == 'yellow') {
//   echo 'Caution!' . PHP_EQL;
// } elseif ($signal == 'blue') {
//   echo 'Go!' . PHP_EQL;
// }

switch ($signal) {
  case 'red':
    echo 'Stop!' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution!' . PHP_EOL;
    break;
  case 'blue':
  case 'green':
    echo 'Go!' . PHP_EOL;
    break;
  default:
    echo 'Wrong signal!!' . PHP_EOL;
    break;
}