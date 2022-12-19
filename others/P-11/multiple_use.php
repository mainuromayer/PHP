<?php 

/* One variable use multiple */
$amount = 100;

printf("Your amount is : %1\$d & Another amount is : %1\$d", $amount);

echo "<br>";
#   another way
printf('Your amount is : %1$d & Another amount is : %1$d', $amount);

?>