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
	<title>Update Facts of Bangladesh</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/update_facts_of_bangladesh.css">
</head>
<body>
	<form action="update_facts_of_bangladesh_process.php" method="post" name="myform">
        <span class="pl1"><label for="Place_name">Enter Capital name:</label></span>
        <span class="t1"><input type="text" class="place" name="capital"></span>
        <span class="pl2"><label for="Place_name">Population::</label></span>
        <span class="t2"><input type="text" class="place1" name="pop"></span>
        <span class="pl3"><label for="Place_name">GDP per capita:</label></span>
        <span class="t3"><input type="text" class="place" name="gdp"></span>
        <span class="pl4"><label for="Place_name">Time zone:</label></span>
        <span class="t4"><input type="text" class="place" name="time"></span>
        <span class="pl5"><label for="Place_name">Official languages:</label></span>
        <span class="t5"><input type="text" class="place" name="lan"></span>
        <span class="pl6"><label for="Place_name">Religion:</label></span>
        <span class="t6"><input type="text" class="place" name="religion"></span>
        <span class="pl7"><label for="Place_name">Main Ethnic Groups::</label></span>
        <span class="t7"><input type="text" class="place" name="ethenic"></span>
        <span class="pl8"><label for="Place_name">Drives on which side:</label></span>
        <span class="t8"><input type="text" class="place" name="drive"></span>
        <span class="pl9"><label for="Place_name">Calling code:</label></span>
        <span class="t9"><input type="text" class="place" name="call"></span>
        <span class="button"><input type="submit" name="save" class="b1" value="Update"></span>
	</form>
</body>
</html>