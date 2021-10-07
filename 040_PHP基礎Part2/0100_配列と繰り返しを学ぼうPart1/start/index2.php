<?php
$arry = ['taro', 'hanako', 'jiro'];
// print_r($arry);  //print_r配列の方を表示

$arry[1] = 'sachiko';
$arry[] = 'saburo';

// var_dump($arry);
// echo $arry[1];

// for($i = 0; $i < 4; $i++) {
//   echo '<div>'.$arry[$i].'</div>';
// }

for ($i = 0; $i < count($arry); $i++) {
  echo '<div>' . $arry[$i] . '</div>';
}

foreach ($arry as $i => $v) {
  echo '<div>' . $i . $v . '</div>';
}
