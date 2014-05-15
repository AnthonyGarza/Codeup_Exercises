<?php

function add($a, $b) {
	// validate that values are numeric and display error if not
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b should be numbers!' . PHP_EOL;
    	echo 'Value inputed for $a is ' . $a .' and $b is ' . $b . PHP_EOL;
    }
}

function subtract($a, $b) {
	// validate that values are numeric and display error if not
    if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b should be numbers!' . PHP_EOL;
    }
}

function multiply($a, $b) {
	// validate that values are numeric and display error if not
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b should be numbers!' . PHP_EOL;
    }
}

function divide($a, $b) {
	// validate that values are numeric and display error if not
    if ($b == 0) {
    	echo 'ERROR: The value of $b can not be 0!' . PHP_EOL;
    } elseif (is_numeric($a) && is_numeric($b)) {
        echo $a / $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b should be numbers!' . PHP_EOL;
    }
}

function modulus($a, $b) {
	// validate that values are numeric and display error if not
    if (is_numeric($a) && is_numeric($b)) {
	echo $a % $b . PHP_EOL;
	} else {
    	echo 'ERROR: Both $a and $b should be numbers!' . PHP_EOL;
    }
}

add(tim, 2);


?>