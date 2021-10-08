<?php
$arry = [
  ['table', 1000],
  ['chair', 100],
  ['bed', 10000],
];

// $arry[1][1] = 500;

// array_shift($arry);   //最初の要素を削除する

// array_pop($arry);  //最後の要素が削除される

array_splice($arry, 1, 1);   //1番目から1つ要素消す（第一引数にどこから消すか、第二引数に何個消すか、第３引数に置換できる

foreach ($arry as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
  // print_r($val);
}
