<?php
// 正規表現を使ってみよう
$char = '<h2>1ZAabd12_sscc</h2>';
// if (preg_match("/aA/", $char, $result)) {
//   echo '検索成功';
//   print_r($result);
// } else {
//   echo '検索失敗';
// }
// if (preg_match("/\wAa/", $char, $result)) {
//   echo '検索成功';
//   print_r($result);
// } else {
//   echo '検索失敗';
// }
// if (preg_match("/\waa/i", $char, $result)) {
//   echo '検索成功';
//   print_r($result);
// } else {
//   echo '検索失敗';
// }
if (preg_match("/<h2>(.{2,})<\/h2>/i", $char, $result)) {
  echo '検索成功';
  print_r($result);
} else {
  echo '検索失敗';
}
