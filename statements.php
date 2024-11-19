<?php

// if Statements -- The if statement is used to check a condition and execute code based on whether the condition is true or false.
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote.";
} 



// if else  - f the condition $age >= 18 is false, the else part will execute and output: "You are not eligible to vote."
$age = 16;
if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}



// if-elseif-else Statement -- Multiple conditions are checked using elseif. If the first condition is false, PHP will move to the next elseif, and if no conditions are true, it will execute the else part.

$score = 75;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}
?>
