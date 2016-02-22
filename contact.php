<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/contact.css">
    <link rel="shortcut icon" href="Images/logo_travel.png">
</head>
<body>
	<div id="h">
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
	</div>
    <div id="heading"><h1>Contact with us</h1>
    	<hr class="hr1">
    </div>
    <div id="para"><p>Having problem? We are always with you. You can contact with us at following ways.Don't worry,because we care for you.</p></div>
        <div id="contact">
            <p>You can contact with us in facebook,Google<sup>+</sup> and twitter . Just click on the iamge below.</p>
            <a href="https://www.facebook.com/pialkanti.samadder" target="_blank" ><img src="Images/social-facebook-box-blue-icon.png" id="fb"></a>
            <a href="https://plus.google.com/u/0/" target="_blank"><img src="Images/latest.png" id="g"></a>
            <a href="https://twitter.com/PialKanti" target="_blank" ><img src="Images/twitter.png" id="twitter"></a>
            <p>Your gmail address :<span id="gmail">pialkanti2012@gmail.com</span></p>
            <p>Click Here to mail us...</p>
            <a href="mailto:pialkanti2012@gmail.com"><img src="Images/5435865becd6b3e71c426a96_Gmail-Logo.png" id="mail"></a>
            <p>Contact no: <span id="num">+8801676277976</span></p>
            <p>Click here for call us...</p>
            <a href="tel:+8801676277976"><img src="Images/latest (1).png" id="call"></a>
        </div>

</body>
</html>