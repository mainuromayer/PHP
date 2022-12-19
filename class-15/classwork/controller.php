<?php
session_start();
require('db.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' || (!isset($_POST['action']) || empty($_POST['action'])) ){
    echo "UnAuthorized Access.";
    exit;
}

$action = $_POST['action'];
if($action == 'logout'){
    unset($_SESSION['current_user']);
    header('Location:./');
}
if($action == 'login'){
    $email = $_POST['email'];
    $password = hash('sha256',$_POST['password']);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['current_user'] = $data;
        header('Location:account.php');
    }else{
        echo "These credential do not match.";
        exit;
    }

}

if($action == 'registration'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = hash('sha256',$_POST['password']);
    $qualification = $_POST['qualification'];
    $birth_date = $_POST['birth_date'];
    
    $profile = $_FILES['profile_picture'];

    $target_dir = "upload/";
    $target_file =$target_dir.basename($profile["name"]);
    $isUpload = move_uploaded_file($profile['tmp_name'],$target_file);
    if(!$isUpload){
        echo "Somethign wrong. File Not upload";
        exit;
    }
    
    $sql = "INSERT INTO users (name,email,phone,password,qualification,profile_picture,birth_date) VALUES ('$name','$email','$phone','$password','$qualification','$target_file','$birth_date');";
    $result = mysqli_query($connection,$sql);
    
    if($result){
        header('Location:index.php');
    }else{
        echo "Something went wrong".mysqli_error($connection);
    }

}


