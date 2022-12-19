<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' || (!isset($_POST['action']) || empty($_POST['action']))){
    header("Location:../errors/?code=400");
}

require ('../controllers/AuthController.php');

$action = $_POST['action'];

$authController = new AuthController();
switch($action){
    case "login":
        $authController->login();
    break;
    case "forgot_password":
        $authController->forgotPassword();
        break;
    case 'password_reset':
        $authController->passwordReset();
        break;
    case 'signup':
        $authController->signup();
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        header("Location:../errors/?code=400");
    break;
}