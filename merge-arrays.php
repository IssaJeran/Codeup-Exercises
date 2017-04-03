<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchArray($name, $array)
{
	if (array_search($name, $array) !== false){
		return true;
	} else {
		return false;
	}
	
}

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

// Function to combine arrays taking in 2 array values as parameters and return a new array with values from both

function combineArrays($array1, $array2){
	$newArray =[];
	foreach($array1 as $key => $item1){
		if ($item1 == $array2[$key]){
			array_push($newArray, $item1);
		}  
		else {
			array_push($newArray, $item1);
			array_push($newArray, $array2[$key]);
		}

	}
	return $newArray;
}




// REsults from exercise

var_dump (searchArray('Tina',$names));
var_dump (searchArray('Bob',$names));
echo compareArrays($names, $compare) . PHP_EOL;
print_r (combineArrays($names, $compare));

