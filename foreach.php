<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $types) {
	if (is_int($types)) {
		echo "{$types} is a integer\n";
    } elseif (is_float($types)) {
    	echo "{$types} is a float\n";
    } elseif (is_bool($types)) {
        echo "{$types} is a boolean\n";
    } elseif (is_array($types)) {
    	echo print_r($types);
    } elseif (is_null($types))	{
        echo "{$types} is null\n";
    } elseif (is_string($types)) {
    	echo "{$types} is a string\n";
    }   	
  
}

?>