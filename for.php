<?php
// prompt user for a starting number and ending number
fwrite(STDOUT, 'Give me a starting number? ');

$start_num = trim(fgets(STDIN));

fwrite(STDOUT, 'Give me a ending number? ');

$end_num = trim(fgets(STDIN));

// prompt user to choos count increment
fwrite(STDOUT, 'Give me a number to  increment by? ');

$incrementer = trim(fgets(STDIN));

// for loop

for ($start_num = $start_num; $start_num <= $end_num; $start_num += $incrementer) {
	echo "{$start_num}\n";
}

?>