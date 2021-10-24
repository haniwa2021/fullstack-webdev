<?php
// データ型
$i = 1;
$str = 'hello';
$b = true;
// var_dump($b);

// 異なる型は自動的に変換される。
// echo $i + (int)$b;

// 型の取り扱いの注意点
var_dump($i === '1');
