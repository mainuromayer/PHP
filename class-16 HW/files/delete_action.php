<?php
require("connection.php");
session_start();
$isLoggedIn = !empty($_SESSION['current_user']);
if(!$isLoggedIn){
    header('Location:./');
    exit;
}

if($_SERVER['REQUEST_METHOD'] != 'GET' ||
 (!isset($_GET['action']) || empty($_GET['action'])) || (!isset($_GET['key']) || empty($_GET['key']))){
    echo "UnAuthorized Access.";
    exit;
}

$action = $_GET['action'];
$key = $_GET['key'];

if ($action = 'user') {
    $sql = "DELETE FROM `registration_form` where id='$key'";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        echo "Delete Unsuccessfull".mysqli_error($connection);
        exit;
    }
    echo "<script>alert('Your Account Deleted Successfully.')</script>";
    header('Location:./');
}

?>