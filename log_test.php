<?php 

require_once 'log.php';

$log = new Log('cli');

echo $log->logMessage("INFO", "This is an info message.");
echo $log->logMessage("ERROR", "This is an info message.");

// the -> calls the method of the object.  
echo $log->logInfo('This is some important info');
echo $log->logError('This did not work');
 ?>