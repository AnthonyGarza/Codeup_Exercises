<?php

function add($a, $b) {
	// validate that values are numeric and display error if not
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b should be numbers!' . PHP_EOL;
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
    if (is_numeric($a) && is_numeric($b)) {
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


add(10, 15);
subtract(10, 15);
multiply(6,7);
divide(42,8);
modulus(4,3);

add(4,to);
multiply(2,h);
subtract(5,4);
subtract(g,2);


?>