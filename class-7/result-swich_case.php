<?php

#   one subject mark

$mark = readline("Enter Your Marks : ");

switch ($mark) {
    case ($mark<=100 && $mark>=80):
        echo "You got A+" . "\n";
        break;

    case ($mark<=79 && $mark>=75):
        echo "You got A" . "\n";
        break;

    case ($mark<=74 && $mark>=70):
        echo "You got A-" . "\n";
        break;

    case ($mark<=69 && $mark>=65):
        echo "You got B+" . "\n";
        break;

    case ($mark<=64 && $mark>=60):
        echo "You got B" . "\n";
        break;

    case ($mark<=59 && $mark>=55):
        echo "You got B-" . "\n";
        break;

    case ($mark<=54 && $mark>=50):
        echo "You got C+" . "\n";
        break;

    case ($mark<=49 && $mark>=45):
        echo "You got C" . "\n";
        break;

    case ($mark<=44 && $mark>=40):
        echo "You got D" . "\n";
        break;

    case ($mark<=39 && $mark>=0):
        echo "You got F" . "\n";
        break;
    
    default:
    echo "Invalid";
        break;
}

?>