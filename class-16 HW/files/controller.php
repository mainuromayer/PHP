<?php


session_start();
require('connection.php');



# ------------------- UnAuthorized Access ----->>------------- #

if($_SERVER['REQUEST_METHOD'] == 'GET' || 
(!isset($_POST['action']) || empty($_POST['action'])) )
{
    echo "UnAuthorized Access.";
    exit;
}

# ---------- ================================ -------------- #

$action = $_POST['action'];

# ---------- ================================ -------------- #



# ------------ registration form data get check --->>--------- #

/* if (isset($_POST['submit'])) {

    if ($name) {echo "Name : ". $name . "<br>";}
        else {echo "Name Not Found" . "<br>";}
        
    if ($title) {echo "Title : ". $title . "<br>";}
        else {echo "Title Not Found" . "<br>";}
        
    if ($number) {echo "Number : ". $number . "<br>";}
        else {echo "Number Not Found" . "<br>";}

    if ($email) {echo "Email : ". $email . "<br>";}
        else {echo "Email Not Found" . "<br>";}

    if ($password) {echo "Password : ". $password . "<br>";}
        else {echo "Password Not Found" . "<br>";}

    if ($qualification) {echo "Qualification : ". $qualification . "<br>";}
        else {echo "Qualification Not Found" . "<br>";}

    if ($address) {echo "Address : ". $address . "<br>";}
        else {echo "Address Not Found" . "<br>";}

    if ($dob) {echo "Date_Of_Birth : ". $dob . "<br>";}
        else {echo "Date_Of_Birth Not Found" . "<br>";}

    if ($gender) {echo "Gender : ". $gender . "<br>";}
        else {echo "Gender Not Found" . "<br>";}

    if ($image_file) {

        echo "<pre>";
            echo "<br> Profile_Pic Details : <br>";
            print_r($image_file);
            echo "<br> Profile_Pic Name : <br>";
            print_r($image_name);
            echo "<br><br> Profile_Pic Tmp Name : <br>";
            print_r($image_tmpname);
        echo "</pre>";

        echo "<br>";}else {echo "Picture Not Found" . "<br>";}
}
else {
    echo "1st time Submit Not found";
    exit;
}
 */

# ---------- ================================ --------------- #



# --------------------- Logout --->>--------------------------- #

if($action == 'logout'){
    unset($_SESSION['current_user']);
    header('Location:./');
}

# ---------- ================================ --------------- #


# --------------------- User Update ---->>--------------------- #

if ($action == 'user_update') {
    if(isset($_POST['submit'])){
        $id = $_POST['user_id'];

        $name = $_POST['name'];
        $title = $_POST['title'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']); 
        $qualification = $_POST['qualification'];
        $address = $_POST['address'];
        $dob = $_POST['d_o_b'];
        $gender = $_POST['gender'];
    
        $profile = $_FILES['profile_picture'];
    
        $target_dir = "upload/";
        $target_file =$target_dir.basename($profile["name"]);
        $isUpload = move_uploaded_file($profile['tmp_name'],$target_file);
        if(!$isUpload){
            echo "Somethign wrong. File Not upload";
            exit;
        }
    
        $sql = "UPDATE `registration_form` SET `name`='$name', `title`='$title', `contact`='$number', `email`='$email', `password`='$password', `qualification`='$qualification', `address`='$address',/*  `d_o_b`='$dob', */ `gender`='$gender'/* , `profile_picture`='$image_name' */";
    
    
        if ($target_file != null) {
            $sql.= ", `profile_picture`='$target_file'";
        }
    
        if ($dob != null) {
            $sql.= ", `d_o_b`='$dob'";
        }
    
        $sql.= "WHERE `id`='$id'";
    
    
        if (mysqli_query($connection, $sql)) {  #   Update
            move_uploaded_file($profile['tmp_name'],$target_file);
    
            header('Location:table_store.php');
        }
        else {
            echo "<script>alert('Not Working.')</script>";
            echo "Something went wrong".mysqli_error($connection);
        }
    }
    else{
        echo "<script>alert('Not Working.')</script>";
    }
}

# ---------- ================================ --------------- #



# --------------------- Login ---->>--------------------------- #

if($action == 'login'){

    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $query = "SELECT * FROM `registration_form` WHERE `email`='$email' AND `password`='$password'";
    
    $result = mysqli_query($connection,$query);
    
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['current_user'] = $data;  # data store current user
        header('Location:table_store.php'); # current user in table_store.php
    }else{
        echo "<script>alert('❌ These credential do not match.❌')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

# ---------- ================================ --------------- #





# ---------- registration form data store database --->>------- #

if($action == 'registration'){
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $title = $_POST['title'];
        $number = $_POST['number'];
        $email = $_POST['email'];


        $password = hash('sha256', $_POST['password']); 
        $qualification = $_POST['qualification'];
        $address = $_POST['address'];
        $dob = $_POST['d_o_b'];
        $gender = $_POST['gender'];

        $profile = $_FILES['profile_picture'];

        $target_dir = "upload/";
        $target_file =$target_dir.basename($profile["name"]);
        $isUpload = move_uploaded_file($profile['tmp_name'],$target_file);
        if(!$isUpload){
            echo "Somethign wrong. File Not upload";
            exit;
        }
        
        
        /* ======================================== */

        
        $sql = "INSERT INTO `registration_form`(`name`, `title`, `contact`, `email`, `password`, `qualification`, `address`, `d_o_b`, `gender`, `profile_picture`) VALUES('$name', '$title', '$number', '$email', '$password', '$qualification', '$address', '$dob', '$gender', '$target_file')";

        $result = mysqli_query($connection, $sql);

        if ($result) {
            header('Location:index.php');
        }
        else {
            echo "Something went wrong".mysqli_error($connection);
        }
    }

    else {
        echo "Submit Not found";
        exit;
    }
}

# ---------- ================================ --------------- #






?>