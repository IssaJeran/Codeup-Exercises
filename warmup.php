<?php

function takesArray($array) {
	$newArray = [];
	$alphabet = range('a','z');
	foreach ($alphabet as $letter) {
		$number = array_search($letter, $array);
		if (is_numeric($number) == true) {
			//$newArray[] = $array[$number];
			$newArray[] = $letter;
			array_push($array, $newArray);
		}
   // echo $letter . "\n";
	}
	return $newArray;
}

//output


$testArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];
$output = takesArray($testArray);
print_r($output);
?>