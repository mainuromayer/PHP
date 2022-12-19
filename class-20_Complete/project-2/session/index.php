<?php

session_start();

$isLoggedIn = isset($_SESSION['current_user']);
if (!$isLoggedIn) {
    header("Location:./");
}





$msg = null;
$status = null;


if ($_SESSION['success_msg']) {
    $msg = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
    $status = true;
}

if ($_SESSION['error_msg']) {
    $msg = $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
    $status = false;
}


?>