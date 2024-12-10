<?php

// functions

function greet($firstname, $lastname, $age) {

    return "Hello, ". $firstname . "" . $lastname . "" . $age;
}

$message = greet("Alex", "fred", 32);

echo $message;



function add($a, $b, $c){
    return $a + $b - $c;
}

$sum  =  add(4, 6, 3);
echo "The sum is: ". $sum ;


//  statements
$limits = 400;
$limited = 250;
$isPassed = true;
$names = "fred";

if(!!$isPassed){
    echo "ok";
}
 else {
    echo "Error";
}


function statem($a, $b, $c) {
    if ($a > $b) {
        if ($c) { // Assuming $c is meant to be a condition
            return "greater";
        } elseif ($b > $a) { // Example of a valid comparison for `elseif`
            return "lesser";
        } else {
            return "equal"; // Default fallback if no other condition is met
        }
    } else {
        return "lesser";}}

$checks = statem(3,5,9);

echo $checks;
?>