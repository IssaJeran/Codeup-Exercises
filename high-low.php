<?php 
$min = $argv[1];
$max = $argv[2];
//If user enters the max first, it switches value. 
if ($min > $max){
	$max = $argv[1];
	$min = $argv[2];
}
//Generates random number between min and max. 
$number = rand($min, $max);
//Counts the number of trys that the user enters. 
$trys = 0;
//Asks user for a number to guess. Assigned to $guess. 
echo "Guess a number between {$min} and {$max}.\n";
$guess = trim(fgets(STDIN)); 
//if user enters something other than a number. 
do {
	echo "Guess a number PLEASE.\n";
	$guess = trim(fgets(STDIN)); 
} while (ctype_digit ($guess) == false);
//Loop checking user guesses against randomly selected number. 
while ($min < $guess && $guess < $max && $guess != $number) {
	if ($guess < $number) {
		echo "HIGHER!\n Try again:";
		$trys++;
		$guess = trim(fgets(STDIN)); 
	} else if ($guess > $number) {
		echo "LOWER!\n Try again:";
		$guess = trim(fgets(STDIN));
		$trys++;
	} 
}
//Entering zero will exit the game. 
if ($guess == 0){
	echo "End game.\n";
}
//If user guesses the right number. 
if ($guess == $number){
	$trys++;
	echo "You guessed my number!\n";
	echo "It took you {$trys} guesses!";
}