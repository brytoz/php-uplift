<?php
// Variable Scope



// Global Scope ---Variables declared outside any function.
$globalVar = "I am global!";
function test() {
    global $globalVar; // Access global variable inside the function
    echo $globalVar;
}
test(); // Output: I am global!


// Local Scope -- Variables declared inside a function.
function test() {
    $localVar = "I am local!";
    echo $localVar;
}
test(); // Output: I am local!


// Static Variables -- Retain their value even after the function has completed execution.
function testStatic() {
    static $count = 0;
    $count++;
    echo $count;
}
testStatic(); // Output: 1
testStatic(); // Output: 2




// ///////  Type Casting in PHP ////////

// You can convert one data type to another:
$number = 10.5;        // Float
$integer = (int) $number; // Convert to integer
echo $integer;        // Output: 10


?>