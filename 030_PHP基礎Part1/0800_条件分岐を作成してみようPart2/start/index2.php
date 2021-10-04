<?php
// if(1 == '1') {
//   echo 'true';
// }    //  == trueになる 型の比較は行わない

$var = '';
if(1 === $var) {
  echo 'true';
} else {
  echo 'false';
}     // === データ型の比較を行う
