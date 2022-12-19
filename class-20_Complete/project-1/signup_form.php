<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href=".//assets//css//signup_form.css">

</head>
<body>
    <h3 class="logo pt-4 text-center">Inventory Management System</h3>
    <p class="text-center pb-3">The faster you fill up, the faster you get a ticket</p>
    
    <div class="container d-flex mb-4">

    <div class="col-3 col-md-3"></div>

    <div class="col-6 col-md-6 p-5 bg-white shadow-sm rounded">
        <form action="./actions/auth.php" method="post">
        <h1 class="text-center pb-3 text-dark">Sign Up</h1>


        <input type="hidden" name="action" value='signup'>

            <div class="form-group text-dark"> Name : <br>
                <input class="form-control bg-transparent mb-3" type="text" name="name" id="name" placeholder="Full Name" required>
            </div>

            <div class="form-group text-dark"> Phone : <br>
                <input class="form-control bg-transparent mb-3" type="numeric" name="phone" id="phone" placeholder="Phone" required>
            </div>

            <div class="form-group text-dark"> Email : <br>
                <input class="form-control bg-transparent mb-3" type="email" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="form-group text-dark"> Password : <br>
                <input class="form-control bg-transparent mb-4" type="password" name="password" id="password" placeholder="Password" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-lg btn-dark btn-block">Sign Up</button>
            </div> 
        </form>
    </div>

    <div class="col-3 col-md-3"></div>

    </div>
</body>
</html>