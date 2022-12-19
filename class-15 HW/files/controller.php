<?php
require('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['user_name'];
    $password = $_POST['user_password'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $chk = '';
    foreach($education as $store){
        $chk.=$store.', ';
    }

    $sql =  "INSERT INTO `student`(`name`, `password`, `gender`, `education`) VALUES('$name', '$password', '$gender', '$chk')";

    if (mysqli_query($connection, $sql)) {
        echo "<script>alert('seccessfully..new record inserted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{
        echo "error : ".mysqli_error($connection);
    }

    mysqli_close($connection);
}


?>