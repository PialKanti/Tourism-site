<?php 
include("head.php");
?>
<!doctype html>
<html> 
<head>
    <!-- Basics -->
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">yi
 
    <!-- CSS -->
    <link rel="shortcut icon" href="Images/logo_travel.png">
    <link rel="stylesheet" href="CSS\login.css">
     
</head>
<!-- Main HTML -->
     
<body>
     
    <!-- Begin Page Content -->
    
    <div class="error_msg">
        <?php 
        if(isset($_GET['login_error']) && $_GET['login_error']=='yes'){
        ?>
            <p class="error">You have entered a wrong Username or Password.</p>
        <?php
    }
        ?>
    </div> 
    <div class="background">
    <div id="container">
        
        <form name="LogIn_form" method="post" action="core\login_process.php">
         
            <label for="username">Username:</label>
             
            <input type="text" id="username" name="userName" required="">
             
            <label for="password">Password:</label>
             
            <!--<p><a href="#">Forgot your password?</a></p>-->
             
            <input type="password" id="password" name="passWord" required="">
             
            <div id="lower">
             
                <input type="checkbox" name="remember"><label  for="checkbox" class="check">Keep me logged in</label>
                 
                <input type="submit" value="Login">
             
            </div><!--/ lower-->
         
        </form>
         
    </div><!--/ container-->
    </div>
     
    <!-- End Page Content -->
     
</body>
 
</html>