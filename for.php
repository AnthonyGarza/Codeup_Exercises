<?php
// prompt user for a starting number and ending number
fwrite(STDOUT, 'Give me a starting number? ');

$start_num = trim(fgets(STDIN));

fwrite(STDOUT, 'Give me a ending number? ');

$end_num = trim(fgets(STDIN));

// prompt user to choose count increment
// default to 1 if no input

fwrite(STDOUT, 'Give me a number to  increment by? ');

$incrementer = trim(fgets(STDIN));

if ($incrementer == '') {
	$incrementer = 1;
}

// for loop

for ($start_num = $start_num; $start_num <= $end_num; $start_num += $incrementer) {
	echo "{$start_num}\n";
}

?>