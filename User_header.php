<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$sql="SELECT * FROM district";
$result=mysql_query($sql) or die(mysql_error());
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="CSS/User_header.css">
</head>
<body>
<div class="header_small">
        <span id="welcome_msg"><?php echo "Hello"."  ".$_SESSION['username'] ?></span>
        <span id="User"><a href="UserPage.php"><b><?php echo $_SESSION['username']; ?></b></a></span>
        <span id="logout"><a href="logout.php">Logout</a></span>
      </div>
      <div id="header">
        <span id="H1"><h1>Welcome to Bangladesh</h1></span>
        <span id="H2"><h2>Land of beautiful stories...</h2></span>
  <!--<nav class="nav_tab">
  <ul class="clearfix">
    <li><a href="home.php"><img src="Images\\081052-glossy-silver-icon-business-home5.png" id="img1"></img></a></li>
    <li><a href="#">Where to start</a></li>
    <li><a href="#">Transportation</a></li>
    <li><a href="#">Festivals</a></li>
    <li><a href="#">About Bangladesh</a></li>
  </ul>
</nav>-->
<div class="nav">
      <ul>
        <li class="home"><a href="home.php">Home</a></li>
        <li class="tutorials"><a href="#">Where to go</a>
          <ul>
            <?php
            while($row=mysql_fetch_array($result)){
            ?>
            <li><a href="Dhaka.php?place='<?php echo $row['name']; ?>'"><?php echo $row['name']; ?></a></li>
            <?php
             }
            ?>
            <!--<li><a href="#">Khulna</a></li>
            <li><a href="#">Chittagong</a></li>-->
          </ul>
        </li>
        <li class="about"><a class="active" href="about_Bangladesh.php">About Bangladesh</a></li>
        <li class="news"><a href="#">Gallery</a>
          <ul>
            <li><a href="gallery_image.php">Images</a></li>
          </ul>
        </li>
        <li class="contact"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
</div>
</body>
</html>