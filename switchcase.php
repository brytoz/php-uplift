<?php

// SWITCH CASE STAEMENT


// The switch statement is used when you need to check one variable against multiple possible values. It is a cleaner and more efficient way to handle multiple conditions that all check the same variable.


$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    default:
        echo "Weekend";
}



//  exmaple
$day = 4;

// Using switch to determine the day of the week
switch ($day) {
    case 1:
        echo "It's Monday.";
        break;
    case 2:
        echo "It's Tuesday.";
        break;
    case 3:
        echo "It's Wednesday.";
        break;
    case 4:
        echo "It's Thursday.";
        break;
    case 5:
        echo "It's Friday.";
        break;
    default:
        echo "It's the weekend!";
}

// Using if-else to check if it's a weekday or weekend
if ($day >= 1 && $day <= 5) {
    echo "It's a weekday.";
} else {
    echo "It's the weekend.";
}
?>
