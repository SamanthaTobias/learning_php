<?php 
	if (count($argv) == 1) {
		echo "Please provide input in the form of an associative array.\n";
	} else if (count($argv) % 2 == 0) { // including script name, so must be odd
		echo "Please provide an even number of arguments.\n";
	} else {
		$ass_array = make_array(array_slice($argv, 1));
		print_r(sort_array($ass_array));
	}

	function make_array($input) {
		$array = [];
		for ($i=0; $i < count($input); $i+=2) { 
			$key = $input[$i];
			$value = (int) $input[$i+1];
			$array[$key] = $value;
		}
		return $array;
	}

	function sort_array($array) {
		$flip = array_flip($array);
		$sorted = [];
		for ($i=0; $i < count($array); $i++) { 
			$lowest = null;
			foreach ($flip as $age => $name) {
				if ($lowest == null || $age <= $lowest) {
					$lowest = $age;
				}
			}
			$sorted[$lowest] = $flip[$lowest];
			unset($flip[$lowest]);
		}
		return $sorted;
	}
?>