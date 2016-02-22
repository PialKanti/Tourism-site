<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$sql="SELECT * FROM datatable";
$re=mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
<title>Register process</title>
<link rel="shortcut icon" href="Images/logo_travel.png">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="CSS\reg_style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="CSS\reg_demo.css" media="all" />
    <script type="text/javascript">
     function checkForm(){
      var password=document.forms["MyForm"]["pass"].value;
      var Repassword=document.forms["MyForm"]["repass"].value;
      var user=document.forms["MyForm"]["username"].value;
      <?php
      while ($row=mysql_fetch_array($re)) {
      ?>
      if(user=='<?php echo $row['username'];?>'){
        alert("Username already exists. Enter new one.");
        document.forms["MyForm"]["username"].focus();
        document.forms["MyForm"]["username"].value="";
        return false;
      }
      <?php
      }
      ?>
      if(password!=Repassword){
        alert("Password doesn't match.");
        document.forms["MyForm"]["repass"].focus();
        document.forms["MyForm"]["repass"].value="";
        return false;
      }
     }
    </script>
</head>
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
<body>
<div class="container">      
      <div  class="form">
    		<form id="contactform" action="register_process.php" method="post" name="MyForm" onsubmit="return checkForm();"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="pass" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repass" required=""> 
 <!--       
               <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </fieldset>
  
            <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select><br><br>
    -->        
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="mobile" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">
            <input class="buttom1" name="reset" id="reset" tabindex="5" value="Reset" type="reset"> 	 
   </form>

</div>      
</div>

</body>
</html>
