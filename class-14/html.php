<?php

#--------------------------------------------------------------
echo "Hello Everyone Wellcome to the class \n";

#   database connection -
$connection = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'daily_hisab');

#   error message -
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    exit();
}
#--------------------------------------------------------------
// $query = 'SELECT * FROM users';
$query = "SELECT id, name, email, password, phone, create_at FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    echo "Failed to execute query :" . mysqli_connect_error($connection);
    exit();
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML | PHP</title>
</head>
<body>
    <table style="width: 100%; text-align: center;" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
                <th>Added By</th>
                <th>Time</th>
            </tr>
        </thead>

        <tbody>

        <?php 
            while ($item = mysqli_fetch_assoc($result)) {
                # code...
            
        ?>
            <tr>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['email']?></td>
                <td><?php echo $item['password']?></td>
                <td><?php echo $item['phone']?></td>
                <td>
                    <?php 
                        $date = $item['create_at'];
                        echo date(format:'d-m-Y');
                    ?>
                </td>
            </tr>


            <?php } ?>
        </tbody>
    </table>
</body>
</html>