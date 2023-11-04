<?php

$arr = [
	'some' => 10,
	'second' => 20,
	30,
	40,
	50,
];

foreach ($arr as $value){
	
	
	if ($value <= 30){
		echo $key.PHP_EOL ;
		continue;
	}
	echo $value.PHP_EOL ;
}