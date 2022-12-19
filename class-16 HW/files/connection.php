<?php

# database connection -
$connection = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'company_db');

# error massage -
if(!$connection){
    echo "Database Connection Failed.".mysqli_connect_error();
    exit();
}

?>