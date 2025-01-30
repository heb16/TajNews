<?php
session_start();
include 'config.php';
if (isset($_POST['register']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$query = "INSERT INTO `users` (`fname`,`lname`,`email`,`user`,`pass`) VALUES ('$fname','$lname','$email','$username','$password')";
	mysqli_query($conn , $query);
	header("location:index.php");
}
?>
<html>
<head>
    <title>TajNews</title>
    <link rel="stylesheet" href="css/site1.css">
    <meta charset="utf-8">
    <link href="ax/khabar1.png" rel="icon">
    <meta name="keywords" content="خبر، اخبار فوری، اقتصادی، سیاسی، ورزشی، هنری، حوادث">
    <meta name="description" content="وبسایت تاج نیوز: درج جدیدترین اخبار در حوزه های مختلف ">
    <meta name="author" content="H.Ebrahimi">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="style4.css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/fs.js"></script>
</head>
<body >

<div class="topmenu">
    <div class="container">
        <div class="socialicons fbicon">
            <img src="ax/tajnews2.png" width="158" height="58">
        </div>
        <ul>
            <li style="margin-top: 5px;"><img src="ax/tajnews1.png" width="158" height="58"</li>
            <li style="margin-top: 10px;"><a href="index.php">صفحه اصلی</a></li>
            <?php
            if(!isset($_SESSION['islogin'])){
                echo "<li style=\"margin-top: 10px;\"><a href=\"login.php\" style=\"float: left;\">ورود</a></li>";
            }else{
                echo "<li style=\"margin-top: 10px;\"><a href=\"admin/index.php\" style=\"float: left;\">پنل مدیریت</a></li>";
                echo "<li style=\"margin-top: 10px;\"><a href=\"logout.php\" style=\"float: left;\">خروج</a></li>";
            }
            ?>
            <li style="margin-top: 10px;"><a href="#">درباره ما</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

<div class="container">
    <div class="tilearea" style="background: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ">
        <div id="content-center" class="contact-left">
            <h3 style="text-align: center"> فرم ثبت نام ادمین
            <form action="" method="post">
                <input style="margin: 15px auto" name="fname" type="text" id="fname" placeholder="نام شما"/>
                <input style="margin: 15px auto" name="lname" type="text" id="lname" placeholder="نام خانوادگی"/>
                <input style="margin: 15px auto" name="email" type="text" id="email" dir="ltr" placeholder="email..."/>
                <input style="margin: 15px auto" name="username" type="text" id="username" dir="ltr" placeholder="username..."/>
                <input style="margin: 15px auto" name="password" type="text" id="password" dir="ltr" placeholder="password..."/>
                <input style="margin: 15px auto" type="submit" name="register" value="ایجاد حساب کاربری" id="btn-send"/>
            </form>
            <br>
        </div>
    </div>
</div>
</body>
</html>