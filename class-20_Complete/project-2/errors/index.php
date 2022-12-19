<?php

$code = (isset($_GET['code']) || empty($_GET['code'])) ? 404: $_GET['code'];

$errorStatus = [
    "404" => "404 Page Not Found",
    "400" => "400 Page Not Found"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>400 Bad Request</title>
    <style>
        h1 {
            color:red;
        }
    </style>
</head>
<body>
    <h1><?php $errorStatus[$code]; ?></h1>
</body>
</html>