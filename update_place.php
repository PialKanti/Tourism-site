<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="CSS/update_place.css">
</head>
<body>
  <div class="main"><img src="Images/blur_22834.jpg" id="background"></div>
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
  <div id="heading"><h1>Update a Place</h1></div>
  <hr class="hr1">
  <div id="content">
    <div id=""></div>
  </div>
</body>
</html>