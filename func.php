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


function statem($a, $b, $c){

    if($a > $b){

        if($a > $b){

            return "greater";
        } elseif(premid) {
            return "lesser";
        } else{
            jkjgjfj
        }
    } else {
        return "lesser";
    }
}

$checks = statem(3,5,9);

echo $checks;
?>