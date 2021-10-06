<?php
$price = 100;
$amount = 5;
// $amount = 0;
$sum = $price * $amount;

if (!empty($sum)) {
  echo "{$price}円の商品を{$amount}個買ったので合計金額は{$sum}円です。";
} else {
  echo '何か買いましょう';
}
