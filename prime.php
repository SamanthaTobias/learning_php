<?php 
if (count($argv) < 2) {
    echo "Please provide a number to check if it is a prime.\n";
} elseif (!is_numeric($argv[1])) {
    echo "'$argv[1]' is not a number.\n";
} else {
    $num = (int) $argv[1];
    for ($i=2; $i <= $num; $i++) {  // Start from 2 because 1 is not prime
        if (is_prime($i)) {
            echo "$i\tPRIME\n";
        }
    }
}

/**
 * Check if a number is prime.
 * 
 * @param int $num The number to check.
 * @return bool True if prime, false otherwise.
 */
function is_prime($num) {
    if ($num < 2) {
        return false;
    }

    for ($i=2; $i * $i <= $num; $i++) { 
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
