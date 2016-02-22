<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
	echo "error".mysql_error();
}
$name=$_POST['place'];
$description=$_POST['description'];
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
$sql="INSERT INTO district(name,description,image_link) VALUES ('{$name}','{$description}','{$image_link}')";
$result=mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/add_district_process.css">
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
   <?php
   if($result){
   ?>
   <div id="success"><p>Your data has been successfully saved.</p></div>
   <?php
   }
   else{
   ?>
   <div id="unsuccess"><p>Something goes wrong.</p></div>
   <?php
   }
   ?>
</body>
</html>