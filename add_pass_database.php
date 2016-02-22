<?php
    session_start();
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
<?php 
session_start();
include "core/dbRegister.php";
$pass=$_SESSION['new'];
$user=$_SESSION['username'];
$sql="UPDATE datatable SET password='$pass' WHERE username='$user'";
mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="CSS/add_pass_database.css">
</head>
<body>
  <span class="txt"><p>Your Password has been successfully changed.</p></span>
</body>
</html>