<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$num = 1;
while ($num <= 10) {
	echo "$num ";
	$num++;
};

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

$Fives = range(5,100,5);
// For reference:
print_r($Fives);
echo "<br>";
/*
Use for-loop and if-statement to print all odd numbers.
How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

 $even= "";
 $odd= "";

for ($Fives = 0; $Fives <= 100; $Fives += 5) {
    if ($Fives%2==0) {
    $even.=$Fives."  ";
    } else {
    $odd.=$Fives." "; 
	}
}

echo "$odd";

// for ($byFives=0; $byFives < ; $byFives++) { 
// };

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array('poutine','vada','pizza','dosa');
print_r($food);
echo "<br><br>";

/*
Use while-loop to print array elements (every food in a new row).
*/
$x = 0;
while ($x === 0) {
	echo "$food[0]"."<br>";
	$x ++;
	echo "$food[1]"."<br>";
	$x ++;
	echo "$food[2]"."<br>";
	$x ++;
	echo "$food[3]"."<br>";
	$x ++;
}
echo "<br>";

/*
Use for-loop to print array elements (every food in a new row).
*/

for ($x = 0; $x <= 3; $x ++) { 
	if ($x === 0) {
		echo "$food[0]"."<br>";
	} else if ($x === 1) {
		echo "$food[1]"."<br>";
	} else if ($x === 2) {
		echo "$food[2]"."<br>";
	} else {
		echo "$food[3]"."<br>";
	}
}
echo "<br>";

/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach ($food as $y) {
	echo "$y <br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.
Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
$z = 0;
echo "<ul>";
for ($z = 0; $z <= 3; $z ++) { 
	if ($z === 0) {
		echo "<li>$food[0]</li>";
	} else if ($z === 1) {
		echo "<li>$food[1]</li>";
	} else if ($z === 2) {
		echo "<li>$food[2]</li>";
	} else {
		echo "<li>$food[3]</li>";
	}
}
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]
So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

$food_assoc = [
	"poutine" => [
    	"type" => "fast food",
    	"origin" => "canada"
  	],
  	"vada" => [
    	"type" => "snack",
    	"origin" => "india"
  	],
  	"pizza" => [
  		"type" => "delicacy",
    	"origin" => "italy"
  	], 
  	"dosa" => [
  		"type" => "snack",
    	"origin" => "india"
  	]
];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

print_r($food_assoc);

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

echo "<br><br> My favorite meals: 
<ul>";
foreach ($food_assoc as $x => $x_value) {
    echo "<li>" . $x . "</li>
    <ul>" . "<li>" . $x_value['type'] . "</li>
    <li>" . $x_value['origin'] . "</li>
    </ul>";
}
echo "</ul>";

// The final printing should look like this:
// My favourite meals

//     pizza
//         type: main course
//         origin: Italy
//     cheesesake
//         type: desert
//         origin: Greece
?>
