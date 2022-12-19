<?php 

$connection = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'library');

if (!$connection) {
    die("connection error..." . mysqli_connect_error($connection));
}

?>