<?php
//  INTERMEDIATE INBUILT PHP FUNCTIONS


// array_merge()  --- Merges two or more arrays.
$array1 = [1, 2];
$array2 = [3, 4];
$result = array_merge($array1, $array2);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )


//  implode() -- Joins array elements into a string.
$array = ["PHP", "is", "fun"];
echo implode(" ", $array); // Output: PHP is fun


//explode() -- Splits a string into an array.
$text = "PHP,is,fun";
$result = explode(",", $text);
print_r($result); // Output: Array ( [0] => PHP [1] => is [2] => fun )



//  array_filter()  -- Filters elements of an array using a callback function.
$array = [1, 2, 3, 4, 5];
$result = array_filter($array, function($value) {
    return $value > 2;
});
print_r($result); // Output: Array ( [2] => 3 [3] => 4 [4] => 5 )

?>