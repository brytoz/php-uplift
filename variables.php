<?php
// Variables in PHP
// Variables in PHP start with a dollar sign ($) followed by the variable name.
// A variable's value can change during script execution.
// Rules for variable names:
// Must start with a letter or an underscore (_).
// Can contain letters, numbers, and underscores.
// Case-sensitive (e.g., $Name and $name are different).

$name = "John"; // String
$age = 25;      // Integer
$isStudent = true; // Boolean


// Data Types in PHP

//  String --- A sequence of characters enclosed in quotes ("" or '').
$name = "Hello, World!";
echo $name; // Output: Hello, World!


// Integer -- Whole numbers (positive or negative, without decimals).
$age = 30;
echo $age; // Output: 30



// Float (Double) -- Numbers with decimal points.
$price = 19.99;
echo $price; // Output: 19.99


// Boolean -- Represents true or false.
$isAdmin = true;
echo $isAdmin; // Output: 1 (true is displayed as 1 in PHP)


//  Array -- 
// Types Indexed Array: Keys are numeric indexes. and  Associative Array: Keys are named.
// Indexed array
$fruits = ["Apple", "Banana", "Cherry"];
echo $fruits[1]; // Output: Banana



//  NULL -- Represents a variable with no value.
$unsetVariable = NULL;
echo $unsetVariable; // Output: (empty, no output)


?>