<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
    echo "error".mysql_error();
}
$sql="SELECT * FROM district";
$re=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($re);{
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add a District</title>
  <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/add_district.css">
	<script>
	function checkPlace(){
        var value=document.forms["myform"]["place"].value;
        if(value=='<?php echo $row['name']; ?>'){
            alert("*This district is already exits. Please enter new one.*");
            document.forms["myform"]["place"].focus();
            document.forms["myform"]["place"].value="";
            return false;
        }
    }


    </script>
<?php
}
?>
</head>
<body>
	<div class="main"><img src="Images/blur_22834.jpg" id="background">
	<div id="heading"><h1>Add district</h1></span>
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
   	<form action="add_district_process.php" method="post" name="myform" enctype="multipart/form-data" onsubmit="return checkPlace();">
   		<div class="pl"><label for="Place_name">Add District name:</label></div>
        <div class="t1"><input type="text" class="place" name="place"></div>
        <div class="des"><label for="Description">Enter short description:</label></div>
        <div class="txtarea"><textarea name="description" placeholder="short description about the district..." cols="80" rows="4" class="area"></textarea></div>
        <div class="image"><label for="Place_name">Upload image:</label></div>
        <div class="upload"><input type="file" name="image" accept="image/*"></div>
        <div class="button"><input type="submit" name="save" class="b1" value="Save"></div>
   	</form>
   </div>
</body>
</html>