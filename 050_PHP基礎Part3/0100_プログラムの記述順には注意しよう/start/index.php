<?php
$num = 0;
counter(2);
/**
 * 
 * - 関数内の処理は関数が実行されて初めて動く
 * - 関数宣言はプログラムの実行よりも前に準備される
 * - それ以外は上から順に実行される
 */
function counter($step = 1)
{
    global $num;    //15行目の$numが入る
    $num += $step;
    echo $num;
    return $num;
}
// $num = 0;
counter(2);
