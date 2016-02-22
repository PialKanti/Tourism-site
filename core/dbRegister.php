<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con)
{
	echo "NOT CONNECTED";
}
?>