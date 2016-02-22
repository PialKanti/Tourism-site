<?php
session_start();
$place=$_GET['place'];
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
	echo "error".mysql_error();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $place; ?></title>
	<link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/Dhaka.css">
</head>
<body>
	<div class="main"><img src="Images/background1.jpg" id="background">
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
    <div class="horizontal"></div>
    <span class="explore"><p>Explore</p></span>
    <?php
	$s="SELECT * FROM district WHERE(name=$place)";
	$r=mysql_query($s) or die(mysql_error());
	while($rows=mysql_fetch_array($r)){
	?>
	<span class="dhaka"><p><?php echo $rows['name']; ?></p></span>
	<div class="paragraph"><p><?php echo $rows['description']; ?></p></div>
	<div class="image1"><img src="<?php echo $rows['image_link']; ?>" id="first"></div>
	<?php	
	}
	?>
	<hr class="hr1">
	<div class="place"><p>Places to Go</p></div>
	<div class="show">
	<?php 
	$sql="SELECT Name,main_image FROM tourisum_spot WHERE (id=$place) ";
    $result=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($result)){
	?>
	<div class="pImg1"><a href="lalbag_fort.php?spot='<?php echo $row['Name'];?>'"><img src="<?php echo $row['main_image']; ?>" id="i1"></a>
		<div id="w1"><?php echo  $row['Name']; ?></div>
	</div>
	<?php	
	}
	?>
	</div>

	</div>
	
	
	<!--<div class="pImg2"><a href=""><img src="Images/ahsanmanjil96.jpg" id="i2"></a></div>
	<div id="w2">Ahsan Manzil</div>
	<div class="pImg3"><a href=""><img src="Images/sonargaon-museum.jpg" id="i3"></a></div>
	<div id="w3">Sonargaon</div>
	<!--
	<div class="horizontal1"></div>
	<div class="side_bar">
		<ul class="nav">
			<li><a href="">Link 1</a>
				<!--<ul class="submenu">
			<li><a href="">Sub 1</a></li>
			<li><a href="">Sub 2</a></li>
		</ul>
			</li>
			<li><a href="">Link 2</a></li>
			<li><a href="">Link 3</a></li>
			<li><a href="">Link 4</a></li>
			<li><a href="">Link 5</a></li>
		</ul>
	</div>
	<span class="places"><p>Places</p></span>
	<div class="begin">
		<img src="Images/untitled68.jpg" id="headImg">
	</div>
	<div class="main"><img src="Images/white-background-1024x640.jpg" id="background"></div>-->
</body>
</html>