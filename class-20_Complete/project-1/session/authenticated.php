<?php
session_start();
$msg=null;
$status = null;

if(isset($_SESSION['success_msg'])){
    $msg = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
    $status = true;
}
if(isset($_SESSION['error_msg'])){
    $msg = $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
    $status = false;
}

$isLoggedIn = isset($_SESSION['current_user']);
if(!$isLoggedIn){
    header("Location:./login.php");
}
$currentUser = $_SESSION['current_user'];