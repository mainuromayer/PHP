<?php

require('connection.php');
session_start();

$isLoggedIn = !empty($_SESSION['current_user']);
if(!$isLoggedIn){
    header('Location:./');
    exit;
}


$user = $_SESSION['current_user'];
/* 

# admin profile not showing - 
$userId = $user['id'];

$query = "SELECT * FROM `registration_form` WHERE id != $userId";
$result = mysqli_query($connection, $query);

if(!$result){
    echo "data not found". mysqli_error($connection);
} */


# only admin profile showing - 
$userId = $user['id'];

$sql = "SELECT * FROM `registration_form` WHERE id = $userId";
$result = mysqli_query($connection, $sql);

if(!$result){
    echo "data not found". mysqli_error($connection);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Table Store</title>
    <link rel="stylesheet" href=".//css//table_store.css">

</head>
<body>

    <h1>
        <pre>Welcome -</pre><small>Username : </small>
        <span><?php echo $user['name'];?></span>
    </h1>
    
    <form action="controller.php" class="header_menu" method="POST">
        <input type="hidden" name="action" value='logout'>
        <button type="submit">Logout</button>
    


    <table cellspacing="5">
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>Title</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>QUALIFICATION</th>
                <th>ADDRESS</th>
                <th>Date of Birth</th>
                <th>GENDER</th>
                <th>PROFILE PICTURE</th>
                <th>CREATE_AT</th>
                <th colspan="2">ACTION</th>
            </tr>
        </thead>

        <?php 
            while($data= mysqli_fetch_assoc($result)){ 
         ?>
        <tbody>
            <tr>
                <td> <?php echo $data['id']; ?> </td>
                <td> <?php echo $data['name']; ?> </td>
                <td> <?php echo $data['title']; ?> </td>
                <td> <?php echo $data['contact']; ?> </td>
                <td> <?php echo $data['email']; ?> </td>
                <td> <?php echo $data['password']; ?> </td>
                <td> <?php echo $data['qualification']; ?> </td>
                <td> <?php echo $data['address']; ?> </td>
                <td>
                    <?php 
                        date_default_timezone_get();
                        echo date('d-m-Y',strtotime($data['d_o_b']));
                    ?>
                </td>
                <td> <?php echo $data['gender']; ?> </td>

                <td style="text-align:center;">
                    <img src="
                    <?php 
                        echo $data['profile_picture'];
                    ?>
                    ">
                </td>

                <td>
                    <?php 
                        date_default_timezone_get();
                        echo date('h:i:s a d-m-Y',strtotime($data['create_at']));
                    ?>
                </td>

                <td>
                    <button type="submit" id="update">
                    <a href="edit_user.php?id=<?php echo $data['id'];?>">update</a>
                    </button>
                </td>

                <td>
                    <button type="submit" id="delete">
                    <a href="delete_action.php?action=user&key=<?php echo $data['id'];?>">delete</a>
                    </button>
                </td>
            </tr>
        </tbody>
        <?php 
            }; 
         ?>

    </table>
    </form>
</body>
</html>