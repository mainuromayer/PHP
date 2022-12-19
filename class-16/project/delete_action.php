<?php
require("db.php");
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

if($action == 'user'){
    
    $query = "DELETE FROM users WHERE id='$key'";
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "Delete Unsuccessfull ".mysqli_error($connection);
        exit;
    }
    header('Location:account.php');

}