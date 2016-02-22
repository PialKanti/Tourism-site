<?php
session_start();
$id=$_GET['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$sql="DELETE FROM tourisum_spot WHERE (No='$id')";
$re=mysql_query($sql) or die(mysql_error());
?>

<?php
$search="SELECT * FROM tourisum_spot";
$result=mysql_query($search) or die(mysql_error());
while($row=mysql_fetch_array($result)){
?>
    <div class="content">
    <div class="name"><p><span>Placename:</span><b><?php echo $row['Name']; ?></b><p></div>
    <div id="button"><input type="button" id="<?php echo $row['No']; ?>" value="Delete" onclick="delete_id(this.id)"></div>
     </div>
<?php
}
?>