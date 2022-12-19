
<html>
<head>
    <title>Registration </title>
    <link rel="stylesheet" type="text/css" href="assets/css/registration.css">
</head>
<body>
     <div class="main">
        <h1>Registration</h1>
        <form method="POST" action='controller.php' enctype='multipart/form-data'>
            <input type="hidden" name='action' value='registration'>
            
            <div class="text">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>                
            <div class="text">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="text">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" required>
            </div>
            <div class="text">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>           
            
            <div class="text">
                <label for="qualification">Qualification</label>
                <input type="text" name="qualification" id="qualification">
            </div>                    
            <div class="text">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" required>
            </div>
                                
            <div class="text">
                <label for="birth_date">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date" required>
            </div>
            <div>
                <button class="button" type="submit">Submit</button>
            </div>
            <p>If you are registered then you can  <a href="index.php">signin</a></p>
        </form>

     </div>

</body>


</html>