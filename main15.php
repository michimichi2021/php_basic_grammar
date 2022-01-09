<?php

$score = 60;
$name = 'taguchi';

if ($score >= 50) {
  if ($name == 'taguchi') {
    echo 'Good job!' . PHP_EOL;
  }
}

// && and 尚且つ
// || or　もしくは
// ! 〜ではない

if ($score >= 50 && $name == 'taguchi') {
  echo 'Good job!' . PHP_EOL;
}