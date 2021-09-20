<?php

/**
 * 
 * 定数の使い方
 * 
 * - define, const での定義方法
 * - constはif文や関数の中では使えない
 * - defineではグローバルスコープに値が配置される
 * - constは名前空間内に配置される(名前空間のレクチャーで紹介)
 */

if (!defined('TAX_RATE')) {    //定数が定義されていない時に定数を定義する
  // const TAX_RATE = 0.1;
  define('TAX_RATE', 0.1);
}

function with_tax($base_price, $tax_rate = TAX_RATE)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}
$price = With_tax(1000, 0.08);
echo $price;
