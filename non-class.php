<?php 

// Code to turn into a class
// Variable and function definitions



$name;
$age;
$employed;


function returnName($someName)
{
	return $name;
}

function getOlder($number)
{
	$number++;
}

function echoAge($someAge)
{
	echo $age;
}

function quitJob($boolean) 
{
	$boolean = false;
}

function getJob($boolean) 
{
	$boolean = true;
}

function passAway($number) 
{
	$number = 0;
}


// Procedural code

$name = 'Bob';
$age = "43";

echo returnName($name);

echoAge($age);

$employed = getJob($employed);
var_dump($employed);

$age = getOlder($age);

echoAge($age);

$age = passAway($age);

echoAge($age);




