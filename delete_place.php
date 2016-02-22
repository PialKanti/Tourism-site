<?php
    session_start();
    $con=mysql_connect("localhost","root","");
    mysql_select_db("pial",$con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete a Tourisum Spot</title>
  <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/delete_place.css">
	<script type="text/javascript">
    function delete_place(click_id){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("place_show").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","delete_place_process.php?id="+click_id, true);
                  xmlhttp.send();
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
<div class="h"><p>Available Places</p></div>
<hr class="hr1">
<div id="place_show">
	<?php
$search="SELECT * FROM tourisum_spot";
$result=mysql_query($search) or die(mysql_error());
while($row=mysql_fetch_array($result)){
?>
    <div class="content">
    <div class="name"><p><span>Placename:</span><b><?php echo $row['Name']; ?></b><p></div>
    <div id="button"><input type="button" id="<?php echo $row['No']; ?>" value="Delete" onclick="delete_place(this.id)"></div>
     </div>
<?php
}
?>
</div>
</body>
</html>