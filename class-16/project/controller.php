<?php
session_start();
require('db.php');
/* ================================================ */

if($_SERVER['REQUEST_METHOD'] == 'GET' || (!isset($_POST['action']) || empty($_POST['action'])) ){
    echo "UnAuthorized Access.";
    exit;
}

/* ================================================ */

$action = $_POST['action'];

/* ================================================ */

if($action == 'logout'){
    unset($_SESSION['current_user']);
    header('Location:./');
}

/* ================================================ */

if($action == 'user_update'){
    $name = $_POST['name'];
    $id = $_POST['user_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $birth_date = $_POST['birth_date'];

    $target_file = null;
    if($_FILES['profile_picture']['error'] == 0){
        $profile = $_FILES['profile_picture'];

        $target_dir = "upload/";
        $target_file =$target_dir.basename($profile["name"]);
        $isUpload = move_uploaded_file($profile['tmp_name'],$target_file);
        if(!$isUpload){
            echo "Somethign wrong. File Not upload";
            exit;
        }
    }
    $query = "UPDATE users SET name = '$name', email='$email',phone='$phone',qualification='$qualification'";   

    if($target_file != null){
        $query.=", profile_picture='$target_file'";
    }
    if($birth_date != null){
        $query.=", birth_date='$birth_date'";
    }

    $query.=" WHERE id = '$id';";

    $update = mysqli_query($connection,$query);
    if(!$update){
        echo "Something went wrong ".mysqli_error($connection);
        exit;
    }
    header('Location:account.php');
}

/* ================================================ */

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

/* ================================================ */

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


