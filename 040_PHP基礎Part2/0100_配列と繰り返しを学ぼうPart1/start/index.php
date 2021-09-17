<?php
$arry = ['taro', 'hanako', 'jiro'];
$arry[1] = 'sachiko';
$arry[] = 'saburo';

for($i = 0; $i < count($arry); $i++) {
  echo '<div>', $arry[$i], '</div>';
}

// 上と同じだけどforeachの方が簡略化が可能、積極的に使う
foreach($arry as $v) {
  echo '<div>', $v, '</div>';
}

foreach($arry as $i => $v) {
  echo '<div>', $i, $v, '</div>';
}

// var_dump($arry);
// echo $arry[1];
