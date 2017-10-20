<!DOCTYPE html>
<?php
require './Includes/dbh-inc.php';

$validate_error = "";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validate_error = "Email is not valid!";
    } else if (!(isEmailAlradyExists($email, $conn))) {
        $validate_error = "This email is not registered";
    } else {
        $key = generateRandomString();
		$key = password_hash($key, PASSWORD_DEFAULT);
        $sql = "UPDATE MEMBER SET PW='$key' WHERE EMAIL='$email'";
        mysqli_query($conn, $sql);
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function isEmailAlradyExists($email, $conn) {
    $sql = "select * from member where email='$email'";
    $result = mysqli_query($conn, $sql);
    return (mysqli_num_rows($result) > 0);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reset your password</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/password_recuver.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <h1 class="myTitle"><span>W</span>ax<span>W</span>ing</h1>
        <div class="c_wraper">
            <form class="" method="POST" action="Password_reset.php">
                <h3>Please Enter your email</h3>
                <div class="form-group">
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group" style="text-align: right;">
                    <input name="submit" type="submit" class="btn btn-success" value="Send Recovery code">
                </div>
            </form>
            <div class="dwraper">
                <p>
                    Login to your account using this code as password and then change it to a new password as you like.
                <p>
            </div>
        </div>
<?php if ($validate_error) { ?>
            <div class="alert alert-danger fadeIn" style=" width:600px;margin-left: auto;margin-right: auto;margin-top: 20px; ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?= $validate_error ?>
            </div>
                <?php
            }
            ?>
    </body>
</html>
