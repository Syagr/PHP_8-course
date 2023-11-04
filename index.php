<?php

$num = 145;
$res = 'Sad';
if ($num > 150){
	$res = 'Success';
}

echo $res;


$num = 145;
if ($num > 140){
	$res = 'Success';
} else{
	$res = 'Sad';
}

echo $res;


$num = 80;
if ($num > 150){
	$res = 'Success';
} elseif($num > 90){
	$res = 'Super Sad';
} else
{
	$res = 'Sad';
}

echo $res;