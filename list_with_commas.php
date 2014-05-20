<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

$last = array_pop($physicists_array);

$famous_fake_physicists = implode(', ', $physicists_array);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists} " ."and {$last}" . PHP_EOL;

// var_dump($physicists_array);
// print_r($physicists_array);