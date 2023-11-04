<?php

$res = pow (num: 10, exponent: 2);
echo $res;

$foo = 'animal';
$foo = ucfirst($foo);
echo $foo;

$str = 'some string 10';
$res = str_replace('10', '', $str);
echo $res;

// массив

$arr = [10, 20, 30, 40,];
array_push ($arr, 50);
$max = max($arr);
var_dump($max);

$arr = [
 'first' => 10,
 'bdbgd' => 20,
 30,
 40,
];
array_push( $arr, 50);

var_dump($arr);