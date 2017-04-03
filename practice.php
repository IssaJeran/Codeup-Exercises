
<?php

// warmup

// Create a classcalled Arnold

class Arnold {

	// Define a property called someQuote

	public $someQuote;

	// Define a method called flex()

	public function flex()
	{
		echo "Flexing muscles!";
	}

	// Define a method called sayQuote() that echos the someQuote

	public function sayQuote()
	{
		echo $this->someQuote();
	}

	//$this->flex();

}


// ***The following code should notmally be in a separate file***

// Instantiate a Practice (Arnold) Object

$commando = new Arnold();

// Set someQuote to "Get to da CHOPPA!";

$commando->someQuote = "Get to da CHOPPA!";

// Call sayQuote() method

$commando->sayQuote();