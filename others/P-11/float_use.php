<?php 

$amount = 10.9;



printf('Your amount is : %f', $amount); // 10.990000
echo "<br>";

#  right way use -
printf('Your amount is : %.2f', $amount);
echo "<br>";



/* ========================================
%d and %f   ==> Difference Float Number
=========================================== */
printf('Your amount is : %d', $amount);
echo "<br>";

printf('Your amount is : %.0f', $amount);   
// .0f  different - (.5 up => next value) | (.5 down => actual value)


?>