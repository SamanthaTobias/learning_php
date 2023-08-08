<?php 
	function is_even($number) {
		if ($number % 2 == 0) {
			return true;
		} else {
			return false;
		}
	}

	if (isset($argv[1])) {
		if (is_numeric($argv[1])) {			
			$number = (int) $argv[1];
			if (is_even($number)) {
				echo "The number $number is even!\n";
			} else {
				echo "The number $number is odd!\n";
			}
		} else {
			echo "The provided input '{$argv[1]} is not a valid number.\n";
		}
	} else {
		echo "Please provide a number as an argument.\n";
	}
?>