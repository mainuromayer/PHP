<?php


echo "Hello Everyone Wellcome to the class \n";

#   database connection -
$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

#   error message -
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    exit();
}


/* ================ value collect ============================== */


/* ================ mysqli_fetch_all() ============================== */

#   query select -
$query = 'SELECT * FROM users';

#   mysqli_query(connection_request, query_variable) = give resourses
/**
 * $result = query result resource
 */
$result = mysqli_query($con, $query);
// $data1 = mysqli_fetch_assoc($result);
$data = mysqli_fetch_all($result, mode:1);
print_r($data);


// value collect useing for loop
echo "\n";
echo 'value collect useing for loop : '."\n";
for ($i=0; $i < count($data); $i++) { 
    echo $data[$i]['name'] . "\n";
}

// value collect useing foreach loop
echo "\n";
foreach ($data as $name) {
    echo $name['name']."\n";
}


/* ================ mysqli_fetch_assoc() ============================== */
// value collect useing foreach loop
foreach ($data1 as $name) {
    echo $name."\n";
}

// value collect useing while loop
while ($data1 = mysqli_fetch_assoc($result)) {
    echo $data1['name']."\n";
}




?>