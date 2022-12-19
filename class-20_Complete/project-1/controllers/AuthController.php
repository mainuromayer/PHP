<?php
require("../database/MySqlConnection.php");
session_start();
class AuthController extends MySqlConnection {

    public function login(){
        $data = $_POST;
        $errors = [];
        if(empty($data['email'])){
            $errors['email']= 'Email field is required';
        }        
        if(empty($data['password'])){
            $errors['password']= 'Password field is required';
        }
        if(count($errors) > 0){
            $_SESSION['validation_error'] = $errors;
            header("Location:../login.php");
        }

        $email = $data ['email'];
        $password = hash("sha256",$data['password']);

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = $this->connect()->query($query);
        if($result->num_rows <= 0){
            $_SESSION['error_msg'] = "The credential do not match";
            header("Location:../login.php");
            exit;
        }

        $user = $result->fetch_assoc();
        $_SESSION['current_user'] = $user;
        $_SESSION['success_msg'] = "Successfully Loggedin";
        header("Location:../");
        exit;
    }

    public function forgotPassword()
    {
        $data = $_POST;
        $errors = [];
        if(empty($data['email'])){
            $errors['email']= 'Email field is required';
        }        
        if(count($errors) > 0){
            $_SESSION['validation_error'] = $errors;
            header("Location:../forgot_password.php");
            exit();
        }
        $email = $data['email'];

        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = $this->connect()->query($query);
        if($result->num_rows <= 0){
            $_SESSION['error_msg'] = "We don't found any account with the given email address.";
            header("Location:../forgot_password.php");
            exit;
        }
        $result_data = $result->fetch_assoc();
        header("Location:../password_reset.php?id=".$result_data['id']);
    }

    public function passwordReset(){
        $data = $_POST;
        $errors = [];
        if(empty($data['password'])){
            $errors['password']= 'Password field is required';
        }
        if(count($errors) > 0){
            $_SESSION['validation_error'] = $errors;
            header("Location:../password_reset.php?id=".$data['id']);
            exit();
        }
        $password = hash("sha256",$data['password']);
        $id = $data['id'];
        $query = "UPDATE user SET password = '$password' WHERE id=$id";   
        $result = $this->connect()->query($query);
        if(!$result){
            $_SESSION['error_msg'] = "Something went wrong. Error: ". $this->connect()->error;
            header("Location:../password_reset.php?id=".$data['id']);
        }
        $_SESSION['success_msg'] = "Password Successfully Reset.";
        header("Location:../login.php");
    }

    public function logout(){
        $isLoggedIn = isset($_SESSION['current_user']);
        if($isLoggedIn){
            unset($_SESSION['current_user']);
        }
        header("Location:../login.php");
    }

    public function signup(){
        $data = $_POST;
        $errors = [];

        if(empty($data['name'])){
            $errors['name']= 'Full Name field is required';
        }        
        if(empty($data['phone'])){
            $errors['phone']= 'Phone field is required';
        }        
        if(empty($data['email'])){
            $errors['email']= 'Email field is required';
        }
        if(empty($data['password'])){
            $errors['password']= 'Password field is required';
        }
        if(count($errors) > 0){
            $_SESSION['validation_error'] = $errors;
            header("Location:../signup_form.php");
        }

        $name = $data ['name'];
        $phone = $data ['phone'];
        $email = $data ['email'];
        $password = hash("sha256",$data['password']);

        $query = "INSERT INTO `user`(`id`, `name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$password')";
        $result = $this->connect()->query($query);

        if($result->num_rows <= 0){
            $_SESSION['error_msg'] = "Data not found.";
            header("Location:signup_form.php");
            exit;
        }
    }
}