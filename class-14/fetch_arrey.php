<?php


echo "Hello Everyone Wellcome to the class \n";

#   database connection -
$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

#   error message -
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    exit();
}


/* ================ mysqli_fetch_arrey() ============================== */

#   query select -
// $query = 'SELECT * FROM users WHERE id = 3'; // specific data
$query = 'SELECT * FROM users';

#   mysqli_query(connection_request, query_variable) = give resourses
/**
 * $result = query result resource
 */
$result = mysqli_query($con, $query);

$data = mysqli_fetch_array($result);
$data1 = mysqli_fetch_array($result);   // second arrey call

print_r($data1);



# output : index + associative array
#   only one arrey output



?>