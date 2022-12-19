
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>

    <link rel="stylesheet" href=".//css//registration.css">
</head>
<body>
    <div class="container">
    <a href="index.php" class="badge">❌</a>
        <form action="controller.php" method="post" enctype="multipart/form-data">
            <legend>Registration Form</legend>
            <input type="hidden" name='action' value='registration'>
            
            <label for="name"> Name :
            <input type="text" name="name" id="name" placeholder="Name" required>
            </label>

            <br>

            <label for="title"> Title :
            <input type="text" name="title" id="title" placeholder="Title" required>
            </label>

            <br>
            
            <label for="number"> Number :
            <input type="numeric" name="number" id="number" placeholder="Number" required>
            </label>

            <br>
            
            <label for="email"> Email :
            <input type="email" name="email" id="email" placeholder="Email" required>
            </label>

            <br>
            
            <label for="password"> Password :
            <input type="password" name="password" id="password" placeholder="Password" required>
            </label>
            
            <br>

            <label for="qualification"> Qualification :
                <input type="text" name="qualification" id="qualification" placeholder="Qualification" required>
            </label>
            
            <br>

            <label for="address"> Address :
                <textarea name="address" placeholder="Address ..." id="address"></textarea>
            </label>
            
            <br>

            <label for="d_o_b"> Date of Birth :
                <input type="date" name="d_o_b" id="d_o_b">
            </label>

            <br>

            <label for=""> Gender :

                    <input type="radio" name="gender" id="male" value="male"> Male

                    <input type="radio" name="gender" id="female" value="female"> Female

                    <input type="radio" name="gender" id="other" value="other"> Other

            </label>

            <br>

            <label for="profile_picture"> Image :
                <input type="file" name="profile_picture" id="profile_picture" required>
            </label>

            <br>

            <input type="submit" value="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>