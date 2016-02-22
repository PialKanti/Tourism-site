<?php
session_start();
 $con=mysql_connect("localhost","root","");
 mysql_select_db("pial",$con);
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Welcome to Bangladesh,land of beautiful stories.</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
  	<link rel="stylesheet" type="text/css" href="CSS\home.css">
    <script type="text/javascript" src="JS\home.js"></script>
    <!--<script type="text/javascript">
    var imageCount=1;
    var total=4;
     function slide (x) {
          var image = document.getElementById('image');
  imageCount = imageCount + x;
  if(imageCount > total){imageCount = 1;}
  if(imageCount < 1){imageCount = total;} 
  image.src = "Images/img"+ imageCount +".jpg";
  }
  window.setInterval(function photoA() {
  var image = document.getElementById('image');
  imageCount = imageCount + 1;
  if(imageCount > total){imageCount = 1;}
  if(imageCount < 1){imageCount = total;} 
  image.src = "Images/img"+ imageCount +".jpg";
  },5000);
        </script>->
  </head>
  <body onload="photoA()">
    <!--<img src="blurred-background-4.jpg" class="backImg">-->
    <div class="main">
      <div class="header_main">
        <div class="header_resize">
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
    <div class="container">
      <?php
      include "slider/image-gallery-source.php";
      ?>
      <!--<img src="Images\\img1.jpg" id="image">
      <div class="left_holder"><img onClick="slide(-1)" src="Images\\arrow_left.png" class="left"></div>
      <div class="right_holder"><img onClick="slide(1)" src="Images\\arrow_right.png" class="right"></div>
      <div class="ribbon"><img src="Images\\ivak-Elaborate-Banner.png" class="ribbon_img"><div class="text">
      <h1 class="txt">Your Journey is about to start...</h1>
    </div><img src="Images/WhiteBackground_Adjustable"></div>-->
    </div>
      <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Welcome to </span>Beautiful Bangladesh
            <h3>Seek the ultimate beauty</h3>
          </h2>
          <div class="clr"></div>
          <div class="photo"><img src="images/10408632_10203788486086750_1349358715857626869_n.jpg" width="300" height="250" alt="" class="fl" /></div>
          <div class="post_content">
            <?php
            $s="SELECT Description1 FROM about_bangladesh";
            $r=mysql_query($s) or die(mysql_error());
            while($array=mysql_fetch_array($r)){
            ?>
            <p id="item"><?php echo $array['Description1']; ?></p>
            <?php 
            }
            ?>
            <p class="spec"><a href="about_bangladesh.php" class="rm" target="_blank">&raquo; Read more</a></p>
          </div>
          <div class="clr">
             <div class="bold">Explore the true beauty of bangladesh</div>
             <?php
             $query="SELECT * FROM images ORDER BY id DESC";
             $re=mysql_query($query) or die(mysql_error());
             $i=1;
             while($array=mysql_fetch_array($re)){
              if($i>6){
                break;
              }
             ?>
             <div class="image_show">
               <div class="photo"><img src="<?php echo $array['image_link']; ?>" width="100" height="80"></div>
             </div>
             <?php
             $i++;
             }
             ?>
             <div class="explore"><p class="spec"><a href="gallery_image.php" class="rm" target="_blank">&raquo; Explore image gallary</a></p></div>
          </div>
        </div>
          <div class="clr"></div>
        </div>
      </div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>Quick links</h2>
        <?php
        $sql="SELECT * FROM district";
        $result=mysql_query($sql) or die(mysql_error());
        while ($rows=mysql_fetch_array($result)) {
        ?>
        <div class="i1">
          <a href="Dhaka.php?place='<?php echo $rows['name']; ?>' "><img src="<?php echo $rows['image_link']; ?>" width="75" height="75" alt="" class="gal" /></a>
          <p id="w1"><?php echo $rows['name']; ?></p>
        </div>
        <?php
        }
        ?>
      </div>
      <div class="col c2">
        
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Having problem? We are always with you. You can contact with us at following ways.Don't worry,because we care for you.</p>
        <p class="contact_info"> <span>Address:</span>Bangabandhu Sheikh Mujibur Rahman Hall,KUET,Tetigati,Khulna.<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +8801676277976<br />
          <span>E-mail:</span> <a href="#">mail@pialkanti2012@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">Pial Kanti Samadder</a>.</p>
      <p class="rf">Design by <b>Pial</b></a></p>
      <div style="clear:both;"></div>
    </div>
        </div>
      </div>
    </div>
    
  </body>
</html>