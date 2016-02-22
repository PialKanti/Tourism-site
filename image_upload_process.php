<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
	echo "error".mysql_error();
}
date_default_timezone_set("Asia/Dhaka");
$upload_date=date("F j, Y, g:i a");
$uploader=$_SESSION['username'];
$image_link="";
if($_FILES['image']['error']>0){
   echo "error";
}
else{
	$prefix=$_SESSION['username'].time();
	$img_address="upload/".$prefix.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$img_address);
	$image_link="http://localhost/Tourism site/upload/".$prefix.$_FILES['image']['name'];
}
$cap=$_POST['caption'];
$sql="INSERT INTO images(image_link,caption,uploader,upload_date) VALUES('{$image_link}','{$cap}','{$uploader}','{$upload_date}')";
$result=mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/image_upload_process.css">
</head>
<body>
	<div class="main"><img src="Images/blur_22834.jpg" id="background">
    <div id="heading"><h1>Upload Image</h1></span>
	<hr class="hr1">
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
   <?php
   if($result){
   ?>
   <div id="success"><p>Your image has been successfully uploaded.</p></div>
   <?php
   }
   ?>
</body>
</html>