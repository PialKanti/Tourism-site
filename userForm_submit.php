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

$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
$user=$_SESSION['username'];
$place=$_POST['livPlace'];
$favourite=$_POST['drop_menu'];
$link="";
$bio=$_POST['txt'];


if($_FILES['image']['error']>0){
   echo "error";
}
else{
	$prefix=$_SESSION['username'].time();
	$img_address="upload/".$prefix.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$img_address);
	$link="http://localhost/Tourism site/upload/".$prefix.$_FILES['image']['name'];
}

$sql="UPDATE datatable SET Place='$place', favourite='$favourite',about='$bio',image_link='$link' WHERE (username='$user')";
//$sql="INSERT INTO DataTable(Place,favourite,about,image_link) VALUES('$place','$favourite','$bio','$link') WHERE username='$user' ";
mysql_query($sql) or die(mysql_error());
header("refresh:5 ; url='userPage.php' ");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/userForm_submit.css">
</head>
<body>
	<p class="re">Your preferences have been saved.</p>
	<p class="re1">You will be redirected in 5 seconds.....</p>
</body>
</html>