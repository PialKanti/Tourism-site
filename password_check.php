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
$_SESSION['new']=$_POST['pass'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS\password_check.css">
  <script type="text/javascript">
  function checkPassword(){
    var pass=document.forms["MyForm"]["pass"].value;
    var repass=document.forms["MyForm"]["repass"].value;
    if(pass!=repass){
      document.getElementById("error").innerHTML="You have entered wrong Password combinations.";
      document.forms["MyForm"]["repass"].focus();
      document.forms["MyForm"]["repass"].value="";
      return false;
    }
  }
  </script>
</head>
<body>
	<span class="headTxt"><h1>Change Password</h1></span>
	<div class="form">
		<form name="MyForm" action="add_pass_database.php" method="post" onsubmit="return checkPassword();" method="post">
	      <span class="txt"><label for="change">New Password:</label></span>
          <span class="new"><input type="password" id="pass" name="pass" required=""></span>
          <span class="txt1"><label for="change">Confirm Password:</label></span>
          <span class="confirm"><input type="password" id="repass" name="repass" required=""></span>
            <p id="error"></p>
          <span class="button"><input type="submit" name="change-pass" class="b1" value="Update"></span>
		</form>
	</div>
  <hr class="hr1">
</body>
</html>