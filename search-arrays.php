<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Function to return true or false if an array value is found

function searchArray($name, $array)
{
	if (array_search($name, $array) !== false){
		return true;
	} else {
		return false;
	}
	
}

// function to compare 2 arrays to return number of values in common

function compareArrays($array1, $array2)
{	
	$count = 0;
	foreach($array1 as $name){
		if (searchArray($name, $array2)){
			$count++;
		}	
	}
	return $count; 
}

// Results for the exercise

var_dump (searchArray('Tina', $names));
var_dump (searchArray('Bob', $names));
echo compareArrays($names, $compare) . PHP_EOL;

// Returns 'True' because Tina is in both arrays
// Returns 'False' since Bob is not in either array
// Returns "2" because there are 2 values/names in common: Tina[0] and Amy[3]

