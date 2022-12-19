<?php

require('./index.php'); # get action or, bad request

require('../controllers/AuthController.php');

$authController = new AuthController();

switch ($action) {
    case 'login':
        $authController->
        break;
    
    default:
        header("Location:../errors/?code=400");
        break;
}

?>