<?php

function tenko($tenko, $is_absent = false)
{
  if ($is_absent) {
    echo "{$student}は欠席しています";
  } else {
    echo "{$student}は出席しています<br>";
  }
}

$student1 = "taro";
tenko($student1);
$student2 = "jiro";
tenko($student2, true)
