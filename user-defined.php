<?php
//  USER DEFINED FUNCTIONS  - OUR OWN FUNCTIONS


// Simple Function
function sayHello() {
    echo "Hello, World!";
}
sayHello(); // Output: Hello, World!



//  Function with a Single Parameter
function greet($name) {
    echo "Hello, $name!";
}
greet("Alice"); // Output: Hello, Alice!



// Function with Multiple Parameters
function addNumbers($a, $b) {
    return $a + $b;
}
$result = addNumbers(5, 7);
echo $result; // Output: 12



// Function with Default Parameters
function introduce($name = "Guest") {
    echo "Welcome, $name!";
}
introduce();          // Output: Welcome, Guest!
introduce("Charlie"); // Output: Welcome, Charlie!


// Function with Return Values
function multiply($a, $b) {
    return $a * $b;
}
$result = multiply(3, 4);
echo $result; // Output: 12


// 
function divide(float $a, float $b): float {
    return $a / $b;
}
echo divide(10, 2); // Output: 5


?>