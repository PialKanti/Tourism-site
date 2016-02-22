<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
	echo "error".mysql_error();
}
$user =$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Image Gallery</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/gallery_image.css">
</head>
<body>
	<div class="main"><img src="Images/white-background-3.jpg" id="background"></div>
	<div id="heading"><h1>Image Gallery</h1></div>
	<?php
	$search="SELECT admin FROM datatable WHERE (username='$user')";
    $result= mysql_query($search) or die(mysql_error());
    while($row=mysql_fetch_array($result)){
    	if($row['admin']==1){
    ?>
	<form action="image_upload.php">
            <div class="button"><input type="submit" name="add" class="b" value="Upload"></div>
        </form>
    <?php
    }
    }
	?>
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
<div id="content">
	<?php
	$sql="SELECT * FROM images";
    $result=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($result)){
	?>
	<div id="image-show">
		<div id="caption"><?php echo $row['caption']; ?></div>
		<div id="image"><img src="<?php echo $row['image_link']; ?>" id="img"></div>
		<div id="uploader">Uploaded By:<span id="name"><?php echo $row['uploader']; ?></span></div>
		<div id="date">Upload date:<span id="d"><?php echo $row['upload_date']; ?></span></div>
	</div>
	<?php
	}
	?>
</div>
</body>
</html>