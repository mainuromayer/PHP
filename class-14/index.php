<?php 
/**
 * Fetch Data From Database
 *  1. mysqli_fetch_arrey()
 *  2. mysqli_fetch_assoc()
 *  3. mysqli_fetch_all()
 * CRUD operation - C : Create, R : Retrieve, U : Update, D : Delete
 *  */


// SELECT * FROM <database_name> 


#--------------------------------------------------------------

echo "Hello Everyone Wellcome to the class \n";

#   database connection -
$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

#   error message -
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    exit();
}
#--------------------------------------------------------------


?>