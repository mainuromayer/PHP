<?php
require("connection.php");
session_start();
$isLoggedIn = !empty($_SESSION['current_user']);
if(!$isLoggedIn){
    header('Location:./');
    exit;
}

if(!array_key_exists('id',$_GET)){
    echo "Invalid Request";
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM `registration_form` WHERE id='$id'";
$result = mysqli_query($connection,$sql);
if(!$result){
    echo "data not found". mysqli_error($connection);
    exit;
}

$user = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href=".//css//edit_user.css">
    
</head>
<body>
    <div class="container">
    <a href="table_store.php" class="badge">❌</a>
    <form method="POST" action='controller.php' enctype='multipart/form-data'>
        <legend>Edit Profile</legend>
            <input type="hidden" name='action' value='user_update'>            
            <input type="hidden" name='user_id' value='<?php echo $user['id'];?>'>

            <label for="name">Name :
                <input type="text" name="name" id="name" value="<?php echo $user['name'];?>">
            </label>

            <br>

            <label for="title">Title :
                <input type="text" name="title" id="title" value="<?php echo $user['title'];?>">
            </label>

            <br>

            <label for="number"> Number :
            <input type="numeric" name="number" id="number" value="<?php echo $user['contact'];?>">
            </label>

            <br>

            <label for="email">Email :
                <input type="email" name="email" id="email" value="<?php echo $user['email'];?>" required>
            </label>

            <br>

            <label for="password">Password :
                <input type="password" name="password" id="password" value="" required>
            </label>

            <br>

            <label for="qualification">Qualification :
                <input type="text" name="qualification" id="qualification" value="<?php echo $user['qualification'];?>">
            </label>

            <br>

            <label for="address"> Address :
                <textarea name="address" placeholder="Address ..." id="address"><?php echo $user['address'];?></textarea>
            </label>
            
            <br>

            <label for=""> Gender :
                <input type="radio" name="gender" id="male" value="male"> Male
                <input type="radio" name="gender" id="female" value="female"> Female
                <input type="radio" name="gender" id="other" value="other"> Other
            </label>

            <br>

            <label for="d_o_b"> D_O_B :
                <input type="date" name="d_o_b" id="d_o_b" value=" <?php echo date('m/d/Y',strtotime($user['d_o_b']));?>">
            <?php echo date('d/m/Y',strtotime($user['d_o_b']));?>
            </label>
            
            <br>
              
            
            <div class="image_label">
                <label for="profile_picture"> Image :
                    <input type="file" name="profile_picture" id="profile_picture">
                    <br>
                    <img src="<?php echo $user['profile_picture'];?>" alt="<?php echo $user['name'];?>" />
                </label>
            </div>

            
            <br>

            <input type="submit" value="Update" name="submit" id="submit">
        </form>
    </div>
</body>
</html>