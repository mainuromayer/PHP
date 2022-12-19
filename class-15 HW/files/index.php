<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>

    <link rel="stylesheet" href=".//css//style.css">
</head>
<body>
    <div class="container">
        <form action="controller.php" method="POST">
            <table border="2">
                <!-- name start -->
                <tr>
                    <td>name :</td>
                    <td>
                        <input type="text" name="user_name" id="" placeholder="Enter User Name" required>
                    </td>
                </tr>
                <!-- name end -->

                <!-- password start -->
                <tr>
                    <td>password :</td>
                    <td>
                        <input type="password" name="user_password" id="" placeholder="Enter Password" required>
                    </td>
                </tr>
                <!-- password end -->

                <!-- gender start -->
                <tr>
                    <td>gender :</td>
                </tr>
                <tr>
                    <td>male</td>
                    <td>
                        <input type="radio" name="gender" id="" value="male">
                    </td>
                </tr>
                <tr>
                    <td>female</td>
                    <td>
                        <input type="radio" name="gender" id="" value="female">
                    </td>
                </tr>
                <!-- gender end -->

                <!-- education start -->
                <tr>
                    <td>education :</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="education[]" id="" value="10th">
                    </td>
                    <td>10th</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="education[]" id="" value="12th">
                    </td>
                    <td>12th</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="education[]" id="" value="Diploma">
                    </td>
                    <td>Diploma</td>
                </tr>
                <!-- education end -->

                <!-- submit start -->
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
                <!-- submit end -->

            </table>
        </form>
    </div>
</body>
</html>