<?php
require("db.php");
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

$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($connection,$query);
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
    
</head>
<body>
    <form method="POST" action='controller.php' enctype='multipart/form-data'>
            <input type="hidden" name='action' value='user_update'>            
            <input type="hidden" name='user_id' value='<?php echo $user['id'];?>'>          
            <div class="text">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $user['name'];?>" required>
            </div>                
            <div class="text">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $user['email'];?>" required>
            </div>

            <div class="text">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="<?php echo $user['phone'];?>" required>
            </div>         
            
            <div class="text">
                <label for="qualification">Qualification</label>
                <input type="text" name="qualification" id="qualification" value="<?php echo $user['qualification'];?>">
            </div>                    
            <div class="text">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture">
                <br>
                <img src="<?php echo $user['profile_picture'];?>" alt="<?php echo $user['name'];?>" style="height:40px;width:40px;">
            </div>
            
                                
            <div class="text">
                <label for="birth_date">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date" value=" <?php echo date('m/d/Y',strtotime($user['birth_date']));?>"> <br>
                <?php echo date('m/d/Y',strtotime($user['birth_date']));?>
            </div>
            <div>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>
</body>
</html>