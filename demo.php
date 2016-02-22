<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$placeName=$_SESSION['place'];
$sql="SELECT * FROM tourisum_spot WHERE(Name=$placeName)";
$re=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($re);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/demo_iframe.css">
</head>
<body>
	<div class="para1"><p class="first"><?php echo $row['history1']; ?></p></div>
        <figure class="img1">
		<img src="<?php echo $row['history_image1']; ?>" class="i1">
		<figcaption><?php echo $row['caption1']; ?></figcaption>
	    </figure>
	    <figure class="img2">
	    	<img src="<?php echo $row['history_image2']; ?>" class="i2">
	    	<figcaption><?php echo $row['caption2']; ?></figcaption>
	    </figure>
	   <div class="para2"><p><?php echo $row['history2']; ?></p></div>
	   <div class="para3"><p><?php echo $row['history3']; ?></p></div>
</body>
</html>