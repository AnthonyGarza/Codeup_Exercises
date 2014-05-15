<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	echo $a % $b . PHP_EOL;
}

add(10, 15);
subtract(10, 15);
multiply(6,7);
divide(42,8);
modulus(4,3);

?>