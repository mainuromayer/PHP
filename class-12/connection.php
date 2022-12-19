<?php 

echo "Hello Everyone! Welcome to the class \n";

$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

echo mysqli_connect_errno();

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
    exit();
}
/* if (!$con) {
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
    exit();
} */



?>