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
    <title>Manage Account</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
    <link rel="stylesheet" href="CSS/manage_account.css">
    <script type="text/javascript">
    function admin_process(clicked_id){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById(clicked_id).value =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","admin_process.php?id_no="+clicked_id, true);
                  xmlhttp.send();
    }
    function delete_id(click_id){
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("user_show").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","delete_id.php?id_no="+click_id, true);
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
<div class="h"><p>Available Accounts</p></div>
<hr class="hr1">
<div id="user_show">
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
</div>
</body>
</html>