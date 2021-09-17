<?php
// == と ===の違い(===の場合はデータ型の比較も入る)
if (1 === '1') {
  echo 'true';
} else {
  echo 'false';
}

// falsyな値
// ""(空文字)
// 0 (数値、文字列)
// NULL
// FALSE


// $var = '';
// if (0 === $var) {
//   echo 'true';
// } else {
//   echo 'false';
// }

$var = '';
if (!0) {
  echo 'true';
} else {
  echo 'false';
}
