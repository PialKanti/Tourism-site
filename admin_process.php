<?php
$id=$_GET['id_no'];
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$sql="SELECT * FROM datatable WHERE (user_id='$id')";
$re=mysql_query($sql) or die(mysql_error());
while ($row=mysql_fetch_array($re)) {
if($row['admin']==1){
	$ad=1;
	$sql1="UPDATE datatable SET admin=0 WHERE (user_id='$id')";
	$re1=mysql_query($sql1) or die(mysql_error());
}
else{
	$ad=0;
	$sql2="UPDATE datatable SET admin=1 WHERE (user_id='$id')";
	$re2=mysql_query($sql2) or die(mysql_error());
}
}


if($ad==1){
	echo "Make Admin";
}
else if($ad==0)
{
	echo "Delete Admin";
}
?>
