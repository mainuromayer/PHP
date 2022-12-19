<?php
$first_name = "Mainur";
$last_name = "Rahaman";

printf("Your First name : %s & Your Last name : %s", $first_name, $last_name);
echo "<br>";


## swaping
printf("Your First name : %2\$s & Your Last name : %1\$s", $first_name, $last_name);

echo "<br>";

# another way
printf('Your First name : %2$s & Your Last name : %1$s', $first_name, $last_name);

?>