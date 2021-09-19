<?php
// 関数を使ってみよう(Part. 1)
// - 特定の機能を使い回せるようにまとめたもの
// - Input(引数)、Output(戻り値)を設定する
// - returnが実行された時点でその関数の処理終了

$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($numbers){  //引数
  $sum = 0;
  foreach ($numbers as $num) {
    $sum += $num;
  }
    return $sum;  //戻り値
}

$result = sum($numbers);
echo "合計 : {$result}<br>";
// sum($numbers2);

// $sum2 = 0;
// foreach ($numbers2 as $num2) {
//   $sum2 += $num2;
// }
// echo "合計 : {$sum2}";
