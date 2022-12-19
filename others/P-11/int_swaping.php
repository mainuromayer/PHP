<?php 

$task1 = 10;
$task2 = 20;

printf("Your 1st amount is : %d & your 2nd amount is : %d", $task1, $task2);
echo "<br>";



##  variable swaping
printf("Your 1st amount is : %2\$d & your 2nd amount is : %1\$d", $task1, $task2);
echo "<br>";
#   another way 
printf('Your 1st amount is : %2$d & your 2nd amount is : %1$d', $task1, $task2);

?>