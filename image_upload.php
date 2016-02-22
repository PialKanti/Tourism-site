<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/image_upload.css">
</head>
<body>
	<div class="main"><img src="Images/blur_22834.jpg" id="background">
	</div>
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
   <div id="form">
   	<form action="image_upload_process.php" method="post" name="myform" enctype="multipart/form-data">
        <div class="image"><label for="Place_name">Upload image:</label></div>
        <div class="upload"><input type="file" name="image" accept="image/*"></div>
        <div class="pl"><label for="Place_name">Add photo caption:</label></div>
        <div class="t1"><input type="text" class="place" name="caption"></div>
        <div class="button"><input type="submit" name="save" class="b1" value="Upload"></div>
   	</form>
   </div>
</body>
</html>