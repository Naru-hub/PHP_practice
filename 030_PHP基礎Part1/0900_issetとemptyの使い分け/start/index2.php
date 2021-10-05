<?php
// $a = 0;
// $a = null;
// $b = 1;

// if(isset($a)) {
//   echo 'true';
// } else {
//   echo 'false';
// } trueを返す

// if(isset($a)) {
//   echo 'true';
// } else {
//   echo 'false';
// } falseを返す

$a = 0;  //""も"0"の文字列も空として扱われる
$b = 1;

// 空の時
// if(empty($a)) {
//   echo 'true';
// } else {
//   echo 'false';
// }

// 空じゃない時
// if(!empty($a)) {
//   echo 'true';
// } else {
//   echo 'false';
// }

if(!isset($a)) {
  echo 'true';
} else {
  echo 'false';
}





