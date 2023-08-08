<?php
	if (count($argv) < 2) {
		echo "Please provide a sentence to reverse.\n";
	} else {
		reverse_sentence($argv);
	}

	function reverse_sentence($words) {
		for ($i=count($words)-1; $i>0; $i--) { // skip script name
			reverse_word($words[$i]);
			echo " ";
		}
		echo "\n";
	}

	function reverse_word($word) {
		for ($i=strlen($word)-1; $i>=0; $i--) {
			echo $word[$i];
		}
	}
?>