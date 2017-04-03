<?php

require_once 'functions.php';

	function pageController()
	{
		$data = [];
		$data['counter'] = (isset($_GET['count']) ? $_GET['count'] : 1);
		$data['clickMessage'] = "";
		if (!empty($_GET)) {
			if($_GET['buttonClicked'] == "UP") {
				$data['counter']++;
			} else {
				$data['counter']--;
			}
		}
		var_dump($data['counter']);
		return $data;

	}

	extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter Exercise</title>
</head>
<body>
		<h1></h1>
		<h2>Total Counter Value = <?= $counter ?></h2>
		<?php var_dump($_GET) ?>


		<form method="GET">
			<input type="hidden" name="buttonClicked" value="UP">
			<input type="hidden" name="count" value="<?=$counter?>">
			<button type="submit">UP</button>
		</form>
		<form method ="GET">
			<input type="hidden" name="buttonClicked" value="DOWN">
			<input type="hidden" name="count" value="<?=$counter?>">
			<button type="submit">DOWN</button>
		</form>


</body>
</html>