<?php
	echo "Hello, World!\n";
	fullName("Samantha", "Lastnamington");

	function fullName($firstName, $lastName) {
		$fullName = $firstName . " " . $lastName;
		echo $fullName . "\n";
	}
?>