<?php


echo "Hello Everyone Wellcome to the class \n";

#   database connection -
$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

#   error message -
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    exit();
}


/* ================ mysqli_fetch_assoc() ============================== */

#   query select -
$query = 'SELECT * FROM users';

#   mysqli_query(connection_request, query_variable) = give resourses
/**
 * $result = query result resource
 */
$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);


print_r($data);
echo $data['name']; // only name print




  

?>