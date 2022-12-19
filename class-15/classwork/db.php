<?php
$connection = mysqli_connect('localhost','root','','akash_db');

if(!$connection){
    echo "Database Connection Failed.".mysqli_connect_error();
    exit();
}