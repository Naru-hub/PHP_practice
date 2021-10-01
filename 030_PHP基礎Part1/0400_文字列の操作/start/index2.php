<?php
$name = 'Bob';
// echo 'hello,' .$name;
// 一般的な文字列と変数の結合

// ""を使うと変数が入れれる
// echo "hello, $name";

// 文字列の中で変数を使う場合は{}を使う
echo "he{$name}llo, $name\n";

// ""だとエスケープシーケンスが使える
echo "hello, $name\n\n\n";
