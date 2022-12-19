<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <link rel="stylesheet" href=".//css//style.css">

    
</head>
<body>
    <div class="container">
        <header>
            <div class="content_left">
                <img src="..//assets//img/Gray Monochrome Happy Monday.jpg" alt="Section_Image">
            </div>

            <div class="content_right">
                <div class="content_logo">
                    <img src="..//assets//img/logo.png" alt="Logo">
                </div>
                <div class="form_section">
                    <form action="controller.php" method="POST">
                        <input type="hidden" name='action' value='login'>

                        <label class="form_title">Welcome!</label> <br><br>
    
                        <div class="form_content">
                            <label for="user_email" class="form_email">Email</label><br>
                            <input type="email" name="email" id="user_email" placeholder="Enter your email" required><br>
        
                            <label for="user_pass" class="form_pass">Password</label><br>
                            <input type="password" name="password" id="user_pass" placeholder="Enter your password" required><br>
    
                            <input type="submit" value="submit" name="submit" id="submit">

                            <p class="forgotten"><a href="controller.php" class="forgotten_pass">Forgotten password?</a></p>
                        </div>
    
                    </form>
                    <a href="registration.php" class="create_button" target="_blank">Create New Account</a>
                </div>
            </div>
        </header>
    </div>
</body>
</html>