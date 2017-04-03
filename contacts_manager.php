<?php



function showAllContacts($array) {
    $filename = 'contacts.txt';
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $contents);
    fwrite($handle, PHP_EOL . $filename);
    fclose($handle); 
}















$choices = ['1', '2', '3', '4', '5'];
if ($choices = '1' ) {
    echo '1) View Contacts';
} elseif ($choices = '2') {
    echo '2) Add Contact';
} elseif ($choices = '3') {
    echo '3) Search Contacts';
} elseif ($choices = '4') {
    echo '4) Delete Contacts';
} elseif ($choices = '5') {
    echo '5) Exit';
}

















