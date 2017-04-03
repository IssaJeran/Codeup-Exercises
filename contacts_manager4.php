<?php 


function parseContacts($filename)
{
    $contacts = [];

    // Open stream
    $filename = "contacts.txt";
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($file)));

    // Convert stream contents to an array
    $contactsArray = explode("\n", $contents);

    // Explode each array element into an associative array of name and number key/values
    foreach ($contactsArray as $key => $contact) {
        $tempArr = explode("|", $contact);
        $contacts[$key]["name"] = $tempArr[0];

        // Create properly formatted phone numbers with substr
        $contacts[$key]["number"] = substr($tempArr[1], 0, 3) . "-" . substr($tempArr[1], 3, 3) . "-" . substr($tempArr[1], 6);
    }

    // Close the stream
    fclose($handle);

    return $contacts;
}

// Displays all contacts to the command line
function showContacts($filename)
{
    clearstatcache();

    $contacts = parseContacts($filename);

    echo "------------CONTACTS------------\n\n";
    echo "NAME             |  PHONE NUMBER" . PHP_EOL;
    echo "--------------------------------";     

    foreach($contacts as $contactArray) {
            echo str_pad($contactArray['name'], 15) . "|" . "  " . $contactArray['number'] . PHP_EOL; 
    }
}

// Adds a new contact to a specified file
function addNewContact($filename, $name, $number)
{
    $filename = "contacts.txt";
    $handle = fopen($filename, 'a');

    $entry = trim($name) . "|" . trim($number);

    fwrite($handle, PHP_EOL . $entry);

    echo "\nContact added successfully.\n";

    fclose($handle);

}

// Shows a specific contact based on a given string
function showContact($filename, $name)
{
    $filename = "contacts.txt";
    $contacts = parseContacts($filename);

    foreach ($contacts as $contactsArray) {
        if(is_numeric(strpos($contactsArray['name'], trim($name))) !== false) {
            echo "\n\n\n---------CONTACTS-------\n\n";      
            echo "NAME             |  PHONE NUMBER" . PHP_EOL;
            echo "--------------------------------" . PHP_EOL;     
            echo str_pad($contactsArray['name'], 16) . "|" . "  " . $contactsArray['number'] . "\n\n\n"; 
        }
    }
}

// Deletes contacts that match a given string
function deleteContact($filename, $name)
{
    $filename = "contacts.txt";
    $handle = fopen($filename, 'a');
    $contactsArray = parseContacts($filename);

    // Search all contacts for a match
   

    foreach($contactsArray as $contact) {
        if(is_numeric(strpos($contact['name'], trim($name))) !== false) {
            $contactFound = true;
            break;
    }
}

     //DElete contact
        //Rewrite the file with all the contacts except the matching conta

    if ($contactFound == true) {

        $filename = "contacts.txt";
        $handle = fopen($filename, 'w');

        foreach ($contactsArray as $contact) {
             if(is_numeric(strpos($contact['name'], trim($name))) == false) {
                $plainNumber = substr($contact['number'], 0, 3) . substr($contact['number'], 4, 3) . substr($contact['number'], 8);
                fwrite($handle, PHP_EOL . $contact['name'] . "|" . $plainNumber);
            }
        }

        fclose($handle)

        echo "\nContact deleted successfully.\n";

    } else{
        echo "No contact to delete by that name. \n";
    }


}

// Displays menu options to the user and validates a correct selection

function mainMenuSelect() 
{

    $selection = 0;

    while (!is_numeric($selection) || $selection <1 || $selection > 5) {
        echo "\n\n1) View Contacts" . PHP_EOL;
        echo "\n\n2) Add Contact" . PHP_EOL;
        echo "\n\n3) Search Contacts By Name" . PHP_EOL;
        echo "\n\n4) Delete Contact" . PHP_EOL;
        echo "\n\n5) Exit" . PHP_EOL;
        $selection = (int) trim(fgets(STDIN));
        echo "\n\n";


    }

    return $selection;

}

// Contains conditional logic based on a user menu choice 
// Gets user input if needed, and calls specific functions passing in the input
function runApp($filename)
{

    echo "\n\n=======================\n";
    echo "       CONTACTS MANAGER APP          ";
    echo "==========================";

    $choice = 0;

    showContacts($filename);

    while($choice != 5) {

        $choice = mainMenuSelect();
        $contactName = "";
        $contactNumber = "";

        switch ($choice) {

            case 1 :
                showContacts($filename);
                break;
            case 2 :
                echo "Please enter a new contact name: ";
                $contactName = trim(fgets(STDIN);
                echo "Please enter a new contact number";
                $contactNumber = trim(fgets(STDIN));
                addNewContact($filename, $contactName, $contactNumber);
                break;
            case 3 :
                echo "Please enter a contact name to view: ";
                $contactName = trim(fgets(STDIN));
                showContact($filename, $contactName);
                break;
            case 4 : 
                echo "Please enter name to delete";
                $contactName = trim(fgets(STDIN));
                deleteContact($filename, $contactName);
                break;
            case 5 :
                break;

        }

    }     

    echo"GOODBYE!!\n\n";
}

runApp("contacts.txt");

