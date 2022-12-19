<?php
include("./session/index.php");

$validation_errors = isset($_SESSION['validation_error']) ? $_SESSION['validation_error'] : [];

$emailError = array_key_exists('email', $validation_errors) ? $validation_errors : "";
$passwordError = array_key_exists('password', $validation_errors) ? $validation_errors : "";

unset($_SESSION['validation_error']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
</head>
<body>
    <h1 class="text-center">Inventory Management System</h1>
    <p class="text-center">The faster you fill up, the faster you get a ticket</p>

    <div class="d-flex">
        <div class="col-3 col-md-3 col-sm-12"></div>

        <div class="col-6 col-md-6 col-sm-12">
            <div class="p-3 bg-dark text-white p-5 mt-4 mb-4 rounded">
                <form action=".action/auth.php" method="POST">
                    <h1 class="text-center pb-4">Login Page</h1>

                    <p style="color: <?php echo $status == true ? 'green': ($status == false ? 'red' : 'black') ?>;"><?php echo $msg; ?></p>
                    <input type="hidden" name="action" value="login">

                    <div class="form-group pb-4">
                        Email :
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email">
                        <span style="color: red;"><?php echo $emailError; ?></span>
                    </div>

                    <div class="form-group pb-4">
                        Password :
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter your Password">
                        <span style="color: red;"><?php echo $passwordError; ?></span>
                    </div>

                    <div class="text-center pb-4">
                        <a href="" class="text-white text-decoration-none">Forgot password</a>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-light btn-lg ps-5 pe-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-3 col-md-3 col-sm-12"></div>
    </div>
</body>
</html>