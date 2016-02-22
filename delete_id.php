<?php
session_start();
$id=$_GET['id_no'];
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$sql="DELETE FROM datatable WHERE (user_id='$id')";
$re=mysql_query($sql) or die(mysql_error());
?>

<?php
$search="SELECT * FROM datatable";
$result=mysql_query($search) or die(mysql_error());
while($row=mysql_fetch_array($result)){
?>
    <div class="content">
    <div class="name"><p><span>Username:</span><b><?php echo $row['username']; ?></b><p></div>
    <div class="button_show">
<?php
if($_SESSION['username']==$row['username']){
    echo "You are currently in control of page.";
}
else{
?>
<div id="button"><input type="button" id="<?php echo $row['user_id']; ?>" value="<?php 
    if($row['admin']==1){
        echo "Delete Admin";
    }
    else {
        echo "Make Admin";
    }
     ?>" onclick="admin_process(this.id)">
    </div>
    <div class="button1"><input type="button" id="<?php echo $row['user_id']; ?>" value="Delete id" onclick="delete_id(this.id)"></div>
<?php
}
?>
    </div>
     </div>
<?php
}
?>