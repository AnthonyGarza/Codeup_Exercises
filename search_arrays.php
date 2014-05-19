<?php

// Create a file in your exercises directory named search_arrays.php with the following code

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names

$query = 'Tina';

function array_has_value($query, $names)
{
	// if (array_search($query, $names) !== FALSE) {
	// 	return 'TRUE';
	// } else {
	// 	return 'FALSE';
	// }

	if (array_search($query, $names) === false)
	{
		return false;
	} else {
		return true;
	}
}

var_dump(array_has_value($query, $names));

// $result = array_has_value($query, $names);

// echo $query . ' is ' . $result . PHP_EOL;



// Create a function to compare 2 arrays that returns the number of values in common between the arrays.
// Use the 2 example arrays and make sure your solution uses array_search()












?>