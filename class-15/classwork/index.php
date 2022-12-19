<?php
session_start();
$isLoggedIn = !empty($_SESSION['current_user']);
if($isLoggedIn){
    header('Location:account.php');
}
?>

<html>
<head>
    <title>Login </title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
     <div class="main">
        <h1>Login</h1>
        <form method='POST' action='controller.php'>
            <input type="hidden" name='action' value='login'>
            <div class="text">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="text">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <button class="button" type="submit">Submit</button>
            </div>
            <p>If you are not registered then you can  <a href="registration.php">signup</a></p>
        </form>

     </div>

</body>


</html>