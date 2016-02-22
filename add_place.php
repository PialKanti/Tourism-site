<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
    echo "error".mysql_error();
}
$sql="SELECT * FROM tourisum_spot";
$re=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($re);
mysql_close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add a Tourisum Spot</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/add_place.css">
    <script>
    function checkPlace(){
        var value=document.forms["myform"]["place"].value;
        if(value==<?php echo $row['Name']; ?>){
            document.getElementById("wrong").innerHTML="*This Location is already exits. Please enter new one.*";
            document.forms["myform"]["place"].focus();
            document.forms["myform"]["place"].value="";
            return false;
        }
    }
    </script>
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
	<form action="add_place_process.php" method="post" name="myform" enctype="multipart/form-data" onsubmit="return checkPlace();">
		<span class="fav"><label for="Place">Select Tourisum place under:</label></span>
        <div class="style-select">
          <select name="id">
            <option value="Dhaka">Dhaka</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Chittagonj">Chittagonj</option>
            <option value="Khulna">Khulna</option>
          </select>
        </div>
        <span class="pl"><label for="Place_name">Tourisum Place Name:</label></span>
        <span class="t1"><input type="text" class="place" name="place"></span>
        <div id="wrong"></div>
        <span class="pl1"><label for="Place_name">Tourisum Place Name in Bengali:</label></span>
        <span class="t2"><input type="text" class="place1" name="name_ban"></span>
        <span class="des"><label for="Description">Enter short description:</label></span>
        <span class="txtarea"><textarea name="description" placeholder="short description about the place..." cols="80" rows="4" class="area"></textarea></span>
        <span class="image"><label for="Place_name">Upload main image:</label></span>
        <span class="upload"><input type="file" name="image_main" accept="image/*"></span>
        <span class="his1"><label for="history_1">Add History(Part 1):</label></span>
        <span class="txtarea1"><textarea name="history1" placeholder="short history about the place..." cols="80" rows="4" class="area"></textarea></span>
        <span class="his2"><label for="history_2">Add History(Part 2):</label></span>
        <span class="txtarea2"><textarea name="history2" placeholder="short history about the place..." cols="80" rows="4" class="area"></textarea></span>
        <span class="his3"><label for="history_3">Add History(Part 3):</label></span>
        <span class="txtarea3"><textarea name="history3" placeholder="short history about the place..." cols="80" rows="4" class="area"></textarea></span>
        <span class="image1"><label for="Place_name">Upload first image for history page:</label></span>
        <span class="upload1"><input type="file" name="image_his_1" accept="image/*"></span>
        <span class="cap"><label for="Place_name">Enter figure caption for above Image:</label></span>
        <span class="tc1"><input type="text" class="caption1" name="caption1"></span>
        <span class="image2"><label for="Place_name">Upload second image image for history page:</label></span>
        <span class="upload2"><input type="file" name="image_his_2" accept="image/*"></span>
        <span class="cap1"><label for="Place_name">Enter figure caption for above Image:</label></span>
        <span class="tc2"><input type="text" class="caption2" name="caption2"></span>
        <span class="pl2"><label for="centre">Enter Longitude of the place:</label></span>
        <span class="t3"><input type="text" class="place2" name="long"></span>
        <span class="pl3"><label for="centre">Enter Latitude of the place:</label></span>
        <span class="t4"><input type="text" class="place3" name="lati"></span>
        <span class="text"><label for="location">Enter Location of the place:</label></span>
        <span class="t5"><input type="text" class="loc" name="location"></span>
        <span class="text1"><label for="location">Enter Co-ordinate of the place:</label></span>
        <span class="t6"><input type="text" class="co" name="co-ordinate"></span>
        <span class="inf"><label for="information">Important Information:</label></span>
        <span class="txtarea4"><textarea name="information" placeholder="Important information about the place..." cols="55" rows="4" class="area"></textarea></span>
        <span class="button"><input type="submit" name="save" class="b1" value="Save"></span>
	</form>
</body>
</html>