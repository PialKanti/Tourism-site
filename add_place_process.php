<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
	echo "error".mysql_error();
}
$id=$_POST['id'];
$name=$_POST['place'];
$bangla_name=$_POST['name_ban'];
$description=$_POST['description'];
$main_image="";
$history1=$_POST['history1'];
$history2=$_POST['history2'];
$history3=$_POST['history3'];
$h_img1="";
$cap1=$_POST['caption1'];
$h_img2="";
$cap2=$_POST['caption2'];
$long=$_POST['long'];
$lat=$_POST['lati'];
$information=$_POST['information'];
if($_FILES['image_main']['error']>0){
   echo "error";
}
else{
	$prefix=$_SESSION['username'].time();
	$img_address="upload/".$prefix.$_FILES['image_main']['name'];
	move_uploaded_file($_FILES['image_main']['tmp_name'],$img_address);
	$main_image="http://localhost/Tourism site/upload/".$prefix.$_FILES['image_main']['name'];
}
if($_FILES['image_his_1']['error']>0){
   echo "error";
}
else{
	$prefix=$_SESSION['username'].time();
	$img_address1="upload/".$prefix.$_FILES['image_his_1']['name'];
	move_uploaded_file($_FILES['image_his_1']['tmp_name'],$img_address1);
	$h_img1="http://localhost/Tourism site/upload/".$prefix.$_FILES['image_his_1']['name'];
}
if($_FILES['image_his_2']['error']>0){
   echo "error";
}
else{
	$prefix=$_SESSION['username'].time();
	$img_address2="upload/".$prefix.$_FILES['image_his_2']['name'];
	move_uploaded_file($_FILES['image_his_2']['tmp_name'],$img_address2);
	$h_img2="http://localhost/Tourism site/upload/".$prefix.$_FILES['image_his_2']['name'];
}

$sql="INSERT INTO tourisum_spot(id,Name,bangla_name,description,main_image,history1,history2,history3,history_image1,caption1,history_image2,caption2,Longitude,Latitude,Information) VALUES ('$id','$name','$bangla_name','$description','$main_image','$history1','$history2','$history3','$h_img1','$cap1','$h_img2','$cap2','$long','$lat','$information') ";
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
   <div id="success"><p>Your data has been successfully saved.</p></div>
   <?php
   }
   ?>
</body>
</html>