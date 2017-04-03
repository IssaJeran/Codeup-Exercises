<?php 

function humanizedList($array, $sort = false)
{	
	if ($sort == true){
		asort($array);
	}
	$lastItem = array_pop($array);
	$newString = implode(', ', $array);
	$newString = $newString . ' and ' . $lastItem;
	return $newString; 
}

// List of famous fake physicists 

 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // Convert the string into an array

 $physicistsArray = explode(', ', $physicistsString);

 // Humanize the list

 $famousFakePhysicists = humanizedList($physicistsArray, true);

 // Output final sentence

 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";


// Eliminate last names and output first names only

//function humanizedList($array)
// $output = "";
// $names = implode(" ", $array);
// $namesArray = explode(" ", $names);
// $firstNamesArray = [];
// for ($i = 0; $i < count($namesArray); $i += 2) {
 //		array_push($firstNamesArray, $namesArray[$i]);
//}

//if ($sortNames == true) {
//		sort($firstNamesArray);

//}

//$lastValue = array_pop($firstNamesArray);
//$output = implode (", ", $firstNamesArray);
//$output .= ", and $lastValue";

// return $names;