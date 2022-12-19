<?php 

    //  input number --> [invalid] string
    $a = readline("Enter the number :" );

    if ($a <= 100 && $a >= 0) {
        echo "Successfully Marked Saved";
    }
    else {
        echo "Invalid input";
    }



/* ====================================================== */


$op = readline("Enter your operator : " );

$a = 10;
$b = 5;


if ($op == "+") {       #  	Addition
    $sum = $a + $b;
    echo "A + B : ". $sum . "\n";
}
elseif ($op == "-") {       #  	Subtraction
    $difference  = $a - $b;
    echo "A - B : ". $difference . "\n";
}
elseif ($op == "*") {       #  	Multiplication
    $product  = $a - $b;
    echo "A - B : ". $product . "\n";
}                               
elseif ($op == "/") {       #  	Division
    $quotient  = $a / $b;
    echo "A - B : ". $quotient . "\n";
}
elseif ($op == "%") {       #  	Modulus
    $remainder  = $a / $b;
    echo "A - B : ". $remainder . "\n";
}
else{
    echo "invalid!";
}




?>