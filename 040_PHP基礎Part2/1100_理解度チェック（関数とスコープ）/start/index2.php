<?php

function tenko($student, $is_absent = false)
{
  if ($is_absent) {
    echo "{$student}は欠席しています。<br>";
  } else {
    echo "{$student}は出席しています。<br>";
  }
}

$student1 = "taro";
tenko($student1);
$student2 = "jiro";
tenko($student2, true);
$student3 = "saburo";
tenko($student3, false);

function counter($step = 1) {
  global $num;
  $num += $step;
  echo $num;
  return $num;
}

$sum = 0;
Counter(2);
Counter(2);