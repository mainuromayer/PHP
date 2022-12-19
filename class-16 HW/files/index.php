<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    
    <link rel="stylesheet" href="..//files//css//style.css">
</head>
<body>
     <div class="container">

        <form method='POST' action='controller.php'>
            <legend>Login</legend>
            <input type="hidden" name='action' value='login'>

                <label for="email">Email :
                    <input type="email" name="email" id="email" required>
                </label> <br>

                <label for="password">Password :
                    <input type="password" name="password" id="password" required>
                </label> <br>

                <input type="submit" name="submit" id="submit" value="Submit"></input>

            <p>If you are not registered then you can &nbsp;
                <a href="registration.php">signup</a>
            </p>
        </form>

     </div>

</body>
</html>