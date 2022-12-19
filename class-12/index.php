<?php 
    # name and age submit -
    if (isset($_POST['name'])) {
        echo "Name : ".$_POST['name'];
        echo "<br>";
    }

    if (isset($_POST['age'])) {
        echo "Age : ".$_POST['age'];
        echo "<br>";
    }

    if (isset($_FILES['image'])) {
        echo "Image : ".$_FILES['image']['name'];
    }



    # image file upload -
    if (isset($_FILES['image'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    move_uploaded_file($file_tmp, "upload-image/".$file_name);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            box-shadow: 0px 0px 10px rgb(187, 185, 185);
            width: 40%;
            margin: 100px auto;
            padding: 50px;
            background-color: rgb(54, 110, 160);
            border-radius: 6px;
        }

        form {
            background-color: #fff;
            padding: 40px 100px;
            border-radius: 6px;
        }
        form label {
            line-height: 30px;
        }
        form input {
            width: 300px;
        }
        form #name {
            border: 1px solid blue;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 15px;
        }
        form #age {
            border: 1px solid blue;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 15px;
        }
        form #image {
            border: 1px solid blue;
            border-radius: 5px;
            padding: 2px;
            cursor: pointer;
            margin-bottom: 25px;
        }
        form button {
            border: 1px solid blue;
            border-radius: 5px;
            padding: 10px 70px;
            margin-left: 56px;
            margin-bottom: 12px;
            cursor: pointer;
            background-color: rgb(54, 110, 160);
            color: #fff;
            font-size: large;
            border-color: rgb(54, 110, 160);
        }
        
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name"> Name :
                <input type="text" name="name" id="name" required>
            </label> <br>

            <label for="age"> Age : &nbsp;&nbsp;
                <input type="numeric" name="age" id="age" required>
            </label> <br>

            <label for="image"> Image :
                <input type="file" name="image" id="image" required>
            </label> <br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>