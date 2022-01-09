<?php

$moreScores = [
  55,
  72,
  'perfect',
  [90, 42, 88],
];

$scores = [
  90,
  40,
  100,
];

$result = array_merge($scores, $moreScores);

// print_r($scores);

echo $result[5] . PHP_EOL;
