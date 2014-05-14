<?php

$fruits = ["apples" => 'red', "bananas" => 'yellow', "oranges" => 'orange', "plums" => 'purple'];

foreach ($fruits as $fruit => $color) {
	echo "{$fruit} are the color {$color}" . PHP_EOL;
}

?>