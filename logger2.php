<?php

function logMessage($logLevel, $message)
{
    $date = date('Y-m-d');
    $time = date('h:i:s');
	$filename = "log-YYYY-MM-DD.log";

	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $date . " " . $time . " " . $logLevel . " " . $message);
	fclose($handle);
}

function logInfo($string)
{
	logMessage("INFO", $string);
}

function logError($string)
{
	logMessage("ERROR",$string);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

logInfo('This is some important info');
logError('This did not work');
