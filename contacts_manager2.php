<?php

function makeArrayOfContacts($filename)
{
    $filename = $filename;
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $contents);
    fclose($handle); 

    foreach ($contacts as $key => $value){

    	$tempArray = explode("|", $contacts[$key]);
    
    	$contactsArray[$key]['name'] = $tempArray[0];
    
    	$tempArray[1] = parseNumber($tempArray[1]);
    	
    	$contactsArray[$key]['number'] = $tempArray[1];
    }
    return $contactsArray;
}

function displayContacts($contactsArray) {
	echo "Name" . "          |   " . "Phone Number" . "    |  \n";
	echo "-----------------------------------";
	foreach ($contactsArray as $contact){
		echo PHP_EOL . $contact ['name'] . "    |    " . $contact ['number'] . "   |    \n" ;
	}


}
$contactsArray = makeArrayOfContacts('contacts.txt');
displayContacts($contactsArray);

//Loop to return the functions
function mainMenu() {
    fwrite(STDOUT, "--- Main Menu ---" . PHP_EOL);    
    fwrite(STDOUT, "1. View Contacts." . PHP_EOL);
    fwrite(STDOUT, "2. Add a new contact." . PHP_EOL);
    fwrite(STDOUT, "3. Search a contact by name." . PHP_EOL);
    fwrite(STDOUT, "4. Delete an existing contact." . PHP_EOL);
    fwrite(STDOUT, "5. Exit. Enter an option (1, 2, 3, 4 or 5): " . PHP_EOL);
    $input = trim(fgets(STDIN));
    switch($input) {
        case 1:
            displayContacts();
            break;
        case 2:
            addContact();
            break;
        case 3:
            searchContact();
            break;
        case 4:
            deleteContact();
            break;
        // default:
        //  input();
        //  break;
    }
}
return mainMenu();

function searchContact($contactsArray){
	$searchResult = array_search('', $contactsArray);
	if ($searchResult) {
    echo $contactsArray[$searchResult];
}

function addContact(){
	fwrite(STDOUT, "Enter name for new contact" . PHP_EOL);
   			 $newContactName = trim(fgets(STDIN));
    		 fwrite(STDOUT, "Enter number for new contact" . PHP_EOL);
    		 $newContactNumber = trim(fgets(STDIN));
			 $filename = "contacts.txt";
	     	 $handle = (fopen($filename, 'a')); 
	         fwrite($handle, PHP_EOL . $newContactName ." | " . $newContactNumber . PHP_EOL);
	         fclose($handle);     
	         mainMenu();
}
return addContact();


}



function deleteContact(){
		fwrite(STDOUT, "Delete Account" . PHP_EOL);
   			 $deleteContactName = trim(fgets(STDIN));
    		 fwrite(STDOUT, "Delete which contact" . PHP_EOL);
    		 $deleteContactNumber = trim(fgets(STDIN));
			 $filename = "contacts.txt";
	    	 $handle = (fopen($filename, 'a')); 
	         fwrite($handle, PHP_EOL . $deleteContactName ." | " . $deleteContactNumber . PHP_EOL);
	         fclose($handle);     
	         mainMenu();
}
return deleteContact();











function parseNumber($string)
{
	$newPhone = substr($string, 0, 3) . "-" . substr($string, 3, 3) . "-" . substr($string, 6, 4);
	return $newPhone;
}


