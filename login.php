<?php
session_start();
include 'config.php';
$err = '';
if (isset($_POST['login']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `user`='$user' AND `pass`='$pass'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) == 1) {
        $users = $row['fname'];
        $users1 = $row['lname'];
        $_SESSION['islogin'] = $users;
        $_SESSION['islogin1'] = $users1;
        header("location:admin/index.php");
    }else{
        $err = "نام کاربری یا رمز عبور اشتباه است";
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <title>ورود به سیستم</title>
        <meta charset="utf-8">
        <link href="ax/khabar1.png" rel="icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="وبسایت تاج نیوز: درج جدیدترین اخبار در حوزه های مختلف ">
        <meta name="author" content="H.Ebrahimi">
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="page-container">
            <h1>ورود به سیستم</h1>
            <form action="" method="post">
                <input type="text" name="username" class="username" placeholder="نام کاربری">
                <input type="password" name="password" class="password" placeholder="رمز عبور">
                <input name="login" type="submit" value="ورود">
                <div class="error"><span>+</span></div>
            </form>
            <a href="register.php"><input name="register" type="submit" value="ثبت نام"></a>

        </div>
        <style>
            body {
                background-color:rgb(10, 140, 201);
            }
        </style>
    </body>

</html>

