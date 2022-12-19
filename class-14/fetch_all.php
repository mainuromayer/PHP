<?php


echo "Hello Everyone Wellcome to the class \n";

#   database connection -
$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

#   error message -
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    exit();
}


/* ================ mysqli_fetch_all() ============================== */

#   query select -
$query = 'SELECT * FROM users';

#   mysqli_query(connection_request, query_variable) = give resourses
/**
 * $result = query result resource
 */
$result = mysqli_query($con, $query);

// $data = mysqli_fetch_all($result, mode:MYSQLI_BOTH);
// $data = mysqli_fetch_all($result, mode:MYSQLI_ASSOC);
$data = mysqli_fetch_all($result, mode:1);


print_r($data);


/**  output : all arrey output
 * mysqli_fetch_all($result);
 *          - index arrey wise
 * mysqli_fetch_all($result, mode:MYSQLI_ASSOC);
 *          - assosiative arrey wise
 * mysqli_fetch_all($result, mode:MYSQLI_BOTH);
 *          - index arrey + assosiative arrey wise
 * 
 * mysqli_fetch_all($result, mode:1);
 *          - assosiative arrey wise
 * mysqli_fetch_all($result, mode:2);
 *          - index arrey wise
*/
?>