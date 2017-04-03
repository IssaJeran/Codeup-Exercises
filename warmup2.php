<?php

function takesArray($array) {
	$newArray = [];
	$vowelArray =['a', 'e', 'i', 'o', 'u'];

	foreach ($array as $letter) {

		if (!is_numeric(array_search($letter, $vowelArray))) {
			$newArray[] = $letter;
		}
		
   // echo $letter . "\n";
	}
	var_dump($newArray);
	return $newArray;
}

//output

$testArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

$output = takesArray($testArray);
print_r($output);
?>