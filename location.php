<?php 
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$placeName=$_SESSION['place'];
$sql="SELECT * FROM tourisum_spot WHERE (Name=$placeName)";
$re=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($re);
$long=(double)$row['Longitude'];
$lat=(double)$row['Latitude'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/location.css">
	<script
        src="http://maps.googleapis.com/maps/api/js">
    </script>
    <script>
var myCenter=new google.maps.LatLng(<?php echo "$long"; ?>,<?php echo "$lat"; ?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
  
	<div class="loc"><p><span class="sp">Address: </span><?php echo $row['address']; ?></p></div>
	<div class="loc1"><p><span class="sp1">Coordinates:</span><?php echo $row['co-ordinates']; ?></p></div>
	<div id="googleMap"></div>
	<div class="credit"><p>All maps credits &#169; Google.</p></div>
</body>
</html>