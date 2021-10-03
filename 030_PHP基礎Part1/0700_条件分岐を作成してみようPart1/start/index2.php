
<?php
// $score = 80;   １つ目の条件式

// if($score < 50) { 
//   echo "不合格" ; 
// } elseif ($score < 70) {  //１つ目を通過すると50点以上確定
//   echo "合格" ; 
// } else { 
//   echo "秀" ; }

  
$score = 80;      //２つ目の条件式 欠席日数5日以上不合格
$kesseki = 5;

if($score < 50 || $kesseki >= 5) { 
  echo "不合格" ; 
} elseif ($score < 70) {  //１つ目を通過すると50点以上確定
  echo "合格" ; 
} else { 
  echo "秀" ; }