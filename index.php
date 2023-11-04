<?php

$numbers = [];
$string = [];
$bools = [];
$arrs = [];

$arr = [
	20,
	35,
	50,
	68,
	'sadasd',
	'dffsdffsd',
	'fdsfsdf',
	'gfdd',
	'sdfsdfsd',
	false,
	true,
	[1,2,3,4,5],
	[2,3,4,5,6],
	[3,4,5,6,7],
];

foreach ($arr as $value) {
	if (is_array($value)) {
		$arrs[] = $value;
	}
	elseif (is_string($value)) {
		$string[] = $value;
	}
	elseif (is_bool($value)) {
		$bools[] = $value;
	}
	elseif (is_int($value)) {
		$numbers[] = $value;
	}
}

var_dump($numbers, $string, $bools, $arrs);