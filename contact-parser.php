<?php

function parseContacts($filename)
{
    $filename = 'contacts.txt';
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));

    $contacts = explode("\n", $contents);

    fclose($handle); 

    foreach ($contacts as $key => $value){

    	//Exploding new line into temporary(copy) array.

    	$tempArray = explode("|", $contacts[$key]);
    	
    	//Assigning index array values from the copy array to another new associative array which will be returned.
    	//Taking the first value(name) from the tempArray and assigning to parsedContacts array.  

    	$parsedContacts[$key]['name'] = $tempArray[0];
    	
    	//Parsing phone number from indexed array before assigning to new array.

    	$tempArray[1] = parseNumber($tempArray[1]);
    	
    	//Assigning parsed phone number into new array that is being returned.

    	$parsedContacts[$key]['number'] = $tempArray[1];
    }
    return $parsedContacts;
}

function parseNumber($string)
{
	//parsing phone number from "1234567890" format to "123-456-7890" format. 
	$newPhone = substr($string, 0, 3) . "-" . substr($string, 3, 3) . "-" . substr($string, 6, 4);
	return $newPhone;
}

print_r(parseContacts('contacts.txt'));
