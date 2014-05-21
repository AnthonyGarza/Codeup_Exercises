<?php

// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $physicists_array = explode(', ', $physicists_string);

// $last = array_pop($physicists_array);

// $famous_fake_physicists = implode(', ', $physicists_array);

// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists} " ."and {$last}" . PHP_EOL;

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $do_sort = FALSE) {
	$array = explode(', ', $string);
	if ($do_sort === TRUE) {
		sort($array);
	}

	$last_item = array_pop($array);

	array_push($array, "and $last_item");

	$string = implode(', ', $array);

	return $string;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, TRUE);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>