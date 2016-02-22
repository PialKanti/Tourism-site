<?php
session_start();
include "core/dbRegister.php"; 
$name=$_POST["name"];
$Email=$_POST["email"];
$userName=$_POST["username"];
$passWord=$_POST["pass"];
$Mobile=$_POST["mobile"];
$date=date("j M,Y");
$link="http://localhost/Tourism site/Images/1424566763_unknown-512.png";
$db="INSERT INTO DataTable(name,email,username,password,mobile,image_link,member_date) VALUES('$name','$Email','$userName','$passWord','$Mobile','$link','$date') ";
$re=mysql_query($db);
if($re){
  $_SESSION['username']=$userName;
  header("refresh:5 ; url='home.php' ");
}
else{
  echo "Error";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/register_process.css">
</head>
<body>
  <div class="main"><img src="Images/blur_22834.jpg" id="background">
    <?php
    if(isset($_COOKIE['Remember_me'])){
      include("User_home_header.php");
    }
    else if(isset($_SESSION['username'])){
      include("User_header.php");
    }
    else {
      include("head.php");
    }
?>
	<p class="p1">Your account has been succesfully created.</p>
	<p class="p2"><span class="b1">Your Full name:</span><?php echo $name; ?></p>
	<p class="p3"><span class="b2">Username:</span><?php echo $userName; ?></p>
	<p class="p4">You will be redirected to Home Page in 5 seconds...</p>
</body>
</html>
