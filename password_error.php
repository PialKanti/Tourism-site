<?php
    session_start();
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
<?php
include "core/dbRegister.php";
$user=$_SESSION['username'];
$sql="SELECT password FROM datatable where username='$user' ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
  if(isset($_POST['pass']) && $_POST['pass']==$row['password']){
    header("Location: password_set.php");
    die();
  }
  else if(isset($_POST['pass']) && $_POST['pass']!=$row['password']){
    header("Location: password_error.php");
    die();
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/password_error.css">
</head>
<body>
	<span class="headTxt"><h1>Change Password</h1></span>
	<div class="form">
		<form name="MyForm" action="password_change.php" method="post">
	      <span class="txt"><label for="change">Old Password:</label></span>
          <span class="old"><input type="password" id="pass" name="pass" required=""></span>
          <div class="error_msg">
            <p class="error">You have entered wrong Password.</p>
          </div> 
          <span class="button"><input type="submit" name="change-pass" class="b1" value="Proceed"></span>
		</form>
	</div>
	
</body>
</html>