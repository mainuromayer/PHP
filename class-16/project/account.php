<?php
require("db.php");
session_start();
$isLoggedIn = !empty($_SESSION['current_user']);
if(!$isLoggedIn){
    header('Location:./');
    exit;
}
$user = $_SESSION['current_user'];
$userId = $user['id'];
$query=" SELECT * FROM users WHERE id != $userId";
$result= mysqli_query($connection,$query);
if(!$result){
    echo "data not found". mysqli_error($connection);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the class. This is <?php echo $user['name'];?></h1>
    <form action="controller.php" method="post">
        <input type="hidden" name="action" value='logout'>
        <button type="submit">Logout</button>
    </form>
    <table border='1' width="100%">
        <tr>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>PROFILE PICTURE</th>
            <th>QUALIFICATION</th>
            <th>BIRTH DATE</th>
            <th>Action</th>
            
        </tr>

        <?php
            while($data= mysqli_fetch_assoc($result)){ 
         ?>
        <tr>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['phone'];?></td>
        <td><?php echo $data['email'];?></td>
        <td style="text-align:center;">
            <img style='height:75px; margin:5px 5px;' src="
            <?php 
                echo $data['profile_picture'];
             ?>
            ">
        </td>
        <td><?php echo $data['qualification'];?></td>
        <td><?php echo $data['birth_date'];?></td>
        <td>
            <button type="button">
                <a href="edit_user.php?id=<?php echo $data['id'];?>">Edit</a>
            </button>

            <button type='button'>
                <a href="delete_action.php?action=user&key=<?php echo $data['id'];?>">Delete</a>
            </button>
        </td>
       
        </tr>

        <?php 
            }; 
         ?>
    </table>
    
</body>
</html>