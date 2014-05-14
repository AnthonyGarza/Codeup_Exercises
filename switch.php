<?php

// // Set the default timezone
// date_default_timezone_set('America/Chicago');

// // Get Day of Week as number
// // 1 (for Monday) through 7 (for Sunday)
// $day_of_week = date('N');

// switch($day_of_week) {
//     case 1:
//         // Output Monday
//     	echo "Today is Monday\n";
//     	break;
//     case 2:
//         // Output Tuesday
//     	echo "Today is Tuesday\n";
//     	break;
//     case 3:
//     	// Output Wednesday
//     	echo "Today is Wednesday\n";
//     	break;
//     case 4:
//     	// Output Thursday
//     	echo "Today is Thursday\n";
//     case 5:
//     	// Output Friday
//     	echo "Today is Friday\n";
//     case 6:
//     	// Output Saturday
//     	echo "Today is Saturday\n";
//     case 7:
//     	// Output Sunday
//     	echo "Today is Sunday\n";

//     // etc through day 7
// }

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

if ($day_of_week == 1) {
	echo "Today is Monday\n";
} elseif ($day_of_week == 2) {
	echo "Today is Tuesday\n";
} elseif ($day_of_week == 3) {
	echo "Today is Wednesday\n";
} elseif ($day_of_week == 4) {
	echo "Today is Thursday\n";
} elseif ($day_of_week == 5) {
	echo "Today is Friday\n";
} elseif ($day_of_week == 6) {
	echo "Today is Saturday\n";
} elseif ($day_of_week == 7) {
	echo "Today is Sunday\n";
}
       
?>