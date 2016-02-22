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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/password_change.css">
  <script type="text/javascript">
  function checkPassword(){
    var pass=document.forms["MyForm"]["pass"].value;
    if(pass!="<?php echo $row['password'] ?>"){
      document.getElementById("error").innerHTML="You have entered wrong Password.";
      document.forms["MyForm"]["pass"].focus();
      document.forms["MyForm"]["pass"].value="";
      return false;
    }
  }
  </script>
</head>
<body>
	<span class="headTxt"><h1>Change Password</h1></span>
	<div class="form">
		<form name="MyForm"  action="password_check.php" method="post" onsubmit="return checkPassword();" >
	      <span class="txt"><label for="change">Old Password:</label></span>
          <span class="old"><input type="password" id="pass" name="pass" required=""></span>
          <p id="error"></p>
          <span class="button"><input type="submit" name="change-pass" class="b1" value="Proceed"></span>
		</form>
	</div>
	<hr class="hr1">
</body>
</html>