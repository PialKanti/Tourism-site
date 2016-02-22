<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$placeName=$_SESSION['place'];
$sql="SELECT Information FROM tourisum_spot WHERE(Name=$placeName)";
$re=mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css">
	pre{
	font-family: Baskerville Old Face;
	font-size: 13pt;
  line-height: 2em;
}
   .content{ 
  margin-top: 60px;
  margin-left: 80px;
}
	</style>
</head>
<body>
	<?php
	while ($row=mysql_fetch_array($re)){
	?>
	<div class="content"><pre><?php echo $row['Information']; ?></pre></div>
	<?php
	}
	?>
</body>
</html>