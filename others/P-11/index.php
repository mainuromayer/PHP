<?php

/* =====================================
        PRINTF - 2  |   specifire
======================================== */
##  search : PHP printf specifire

/**
 * %s ==> String value
 * %d ==> Integer
 * %f ==> Float   # .000000 show
 * %c ==> ASCI value
 * %b ==> Binary code
 * %o ==> Octal number
 * %x ==> Hexa-decimal number   # small_letter
 * %X ==> Hexa-decimal number   # capital_letter


*/



$text = "World";
$amount = 100;
$point = 2.3;
$task = 111;

printf("Hello %s", $text);  # String
echo "<br>";
printf("This amount is : %d", $amount); # Integer
echo "<br>";
printf("This point is : %f", $point);   # Float 
echo "<br>";
printf("This task is : %c", $task); # ASCI value
echo "<br>";
printf("This binary code is : %b", $task);  # Binary
echo "<br>";
printf("This octal number is : %o", $task); # Octal
echo "<br>";
printf("This octal number is : %x", $task); # Hexa-Decimal |   small_letter
echo "<br>";
printf("This octal number is : %X", $task); # Hexa-Decimal |   capital_letter

?>