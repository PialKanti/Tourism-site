<?php
$i='Bangladesh';
$capital=$_POST['capital'];
$population=$_POST['pop'];
$gdp=$_POST['gdp'];
$time_zone=$_POST['time'];
$language=$_POST['lan'];
$religion=$_POST['religion'];
$ethenic=$_POST['ethenic'];
$drive=$_POST['drive'];
$call=$_POST['call'];

$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
    echo "error".mysql_error();
}
$sql="INSERT INTO facts_of_bangladesh(id,capital,population,gdp,time,languages,religion,ethnic,drives,call_code) VALUES ('$i','$capital','$population','$gdp','$time_zone','$language','$religion','$ethenic','$drive','$call')";
$re=mysql_query($sql) or die(mysql_error());

?>