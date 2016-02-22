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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/userForm.css">
</head>
<body>
	<span class="headTxt"><h1>Edit Your Bio</h1></span>
	<form action="userForm_submit.php" method="post" name="UserForm" enctype="multipart/form-data">
		<span class="liv"><label for="where">Where do you live in:</label></span>
        <span class="t1"><input type="text" id="living" name="livPlace"></span>
        <span class="fav"><label for="Favourite">Your favourite Spot:</label></span>
        <div class="style-select">
          <select name="drop_menu">
            <option value="Cox's Bazar">Cox's Bazar</option>
            <option value="Kuakata">Kuakata</option>
            <option value="St. Martin's Island">St. Martin's Island</option>
            <option value="Rangamati">Rangamati</option>
            <option value="Sylhet">Sylhet</option>
          </select>
        </div>
        <span class="headTxt1"><h1>Change Picture</h1></span>
        <span class="upload"><input type="file" name="image" accept="image/*"></span>
        <span class="img1"><img src="Images/1424566763_unknown-512.png" class="pic"></span>
        <span class="headTxt2"><h1>About You</h1></span>
        <span class="say"><label for="where">Say Something about yourself:</label></span>
        <span class="txtarea"><textarea name="txt" placeholder="Share what in your mind........" cols="80" rows="4" class="area"></textarea></span>
        <hr class="hr1">
         <span class="button1"><input type="submit" name="save" class="b2" value="Save"></span>
	</form>
  <form action="password_change.php" name="change_pass">
    <span class="button"><input type="submit" name="change-pass" class="b1" value="Change password"></span>
  </form>
</body>
</html>