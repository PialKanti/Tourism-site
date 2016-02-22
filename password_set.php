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
if(isset($_POST['pass']) && isset($_POST['repass']) && $_POST['pass']==$_POST['repass']){
	header("Location: add_pass_database.php");
	die();
}
else if(isset($_POST['pass']) && isset($_POST['pass']) && $_POST['pass']!=$_POST['repass']){
	header("Location: password_check.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS\password_set.css">
</head>
<body>
	<span class="headTxt"><h1>Change Password</h1></span>
	<div class="form">
		<form name="MyForm" action="password_check.php" method="post">
	      <span class="txt"><label for="change">New Password:</label></span>
          <span class="new"><input type="password" id="pass" name="pass" required=""></span>
          <span class="txt1"><label for="change">Confirm Password:</label></span>
          <span class="confirm"><input type="password" id="repass" name="repass" required=""></span>
          <span class="button"><input type="submit" name="change-pass" class="b1" value="Update"></span>
		</form>
	</div>
	<hr class="hr1">
</body>
</html>