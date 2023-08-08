<?php 
	if (count($argv) < 2) {
		echo "Please provide a number to check if it is a prime.\n";
	} elseif (is_numeric($argv[1])) {
		$num = (int) $argv[1];
		for ($i=1; $i <= $num; $i++) { 
			if (is_prime($i)) {
				echo "$i\tPRIME\n";
			}
		}
	} else {
		echo "'$argv[1]' is not a number.\n";
	}

	function is_prime($num) {
		if ($num < 3) {
			return true;
		}
		for ($i=2; ; $i++) { 
			if (is_divisor_of($i, $num)) {
				return false;
			} elseif ($i * $i >= $num) {
				return true;
			}
		}
	}

	function is_divisor_of($x, $num) {
		for ($i=1; ; $i++) { 
			$factor = $x * $i;
			if ($factor == $num) {
				echo "$num\t$x * $i\n";
				return true;
			} elseif ($factor > $num) {
				return false;
			}
		}
	}
?>