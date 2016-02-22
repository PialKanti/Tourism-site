<?php
session_start();
$value=$_GET['spot'];
$_SESSION['place']=$value;
$user=$_SESSION['username'];
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
  //$place=$row['Name'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $value; ?></title>
  <link rel="shortcut icon" href="Images/logo_travel.png">
  <link rel="stylesheet" href="CSS/lalbag_fort.css">
  <script>
     function comment_function()
                {
                  var place = <?php echo $value; ?>;
                  var comment = document.getElementById("area").value;
                  document.getElementById("area").value="";
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                      document.getElementById("comment_show").innerHTML =xmlhttp.responseText;
                      
                    }
                  }
                  xmlhttp.open("GET", "comment_process.php?placename="+place+"&text="+comment, true);
                  xmlhttp.send();
                }

     function delete_comment(clicked_id){
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("comment_show").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","comment_delete.php?id_no="+clicked_id, true);
                  xmlhttp.send();
          }
          function like_count(id_no){
             var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("comment_show").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","like_show.php?id_no="+id_no, true);
                  xmlhttp.send();
          }
          /*function dislike_count(id_no){
             var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("comment_show").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","dislike_show.php?id_no="+id_no, true);
                  xmlhttp.send();
          }*/
  </script>
</head>
<body>
  <div class="main"><img src="Images/background1.jpg" id="background">
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
<?php
$sql="SELECT * FROM tourisum_spot WHERE(Name=$value)";
$re=mysql_query($sql) or die(mysql_error());
while($row=mysql_fetch_array($re)){
?>  
    <div class="horizontal"></div>
    <span class="lalbag"><p id="place"><?php echo $row['Name']; ?></p></span>
  <span class="ban"><p><?php echo $row['bangla_name']; ?></p></span>
  <div class="paragraph"><p><?php echo $row['description']; ?></p></div>
  <div class="image1"><img src="<?php echo $row['main_image']; ?>" id="first"></div>
<?php
    }
  ?>
  <div class="navigation">
    <ul class="list">
      <span class="l1"><li class="l1"><a href="demo.php" target="fr">History</a></li></span>
      <span class="l2"><li class="l2"><a href="location.php" target="fr">Location</a></li></span>
      <span class="l3"><li class="l3"><a href="information.php" target="fr">Important Information</a></li></span>
    </ul>
  </div>
  <div class="frame">
    <iframe src="demo.php" name="fr" class="fr"></iframe>

    <?php
    if(isset($_COOKIE['Remember_me']) || isset($_SESSION['username'])){
    ?>
    <hr class="hr1">
      <div class="comment_post">
        <p class="heading">Comments:</p>
    <div id="comment_show">
    <?php
    $s="SELECT * FROM comment WHERE (id=$value) ORDER BY comment_id DESC";
    $r=mysql_query($s) or die(mysql_error());
    while ($rows=mysql_fetch_array($r)) {
      $id= $rows['comment_id'];
    ?>
    <div class="back">
    <div id="user"><span id="u"><?php echo $rows['username']; ?></span>says</div>
    <?php
    $user =$_SESSION['username'];
    $check="SELECT * FROM datatable WHERE username='$user'";
    $p=mysql_query($check) or die(mysql_error());
    $admin_row=mysql_fetch_array($p);
    if($admin_row['admin']==1){
    ?>
    <div id="delete_comment"><input type="button"  id="<?php echo $rows['comment_id']; ?>" onclick="delete_comment(this.id)">
    </div>
    <?php
    }
    ?>
    <div id="date"> <?php echo $rows['date_time']; ?></div>
    <div id="comm"><p id="<?php echo $rows['comment_id'] ?>"><?php echo $rows['comment']; ?></p></div>
    <div id="like_show">
      <?php
      $i=0;
      $query="SELECT * FROM like_record WHERE(comment_id='$id') AND (username='$user')";
      $array=mysql_query($query);
      while($array_row=mysql_fetch_array($array)){
        $i=1;
       }
      ?>
      <?php
      if($i==0){
      ?>
      <div id="like"><input type="button" name="like" id="<?php echo $rows['comment_id']; ?>" onclick="like_count(this.id)"></div>
      <div id="like_amount"><?php echo $rows['likes']; ?> people like this</div>
      <?php
      }
      else
      {
      ?>
      <input type="button" id="liked" value="&#8730; Liked">
      <div id="like_amount"><?php echo $rows['likes']; ?> people including <b>You</b> like this</div>
      <?php
      }
      ?>  
    </div>
  </div>
    <?php
    } 
    ?>
  </div>
        <p class="txt">Write your comment here:</p>
          <textarea name="txt" placeholder="Comments goes here..." cols="60" rows="6" id="area"></textarea>
          <div class="button"><input type="button" name="post" class="b" value="Post" onclick="comment_function()">
        </div>
    <?php
    }
    ?>
    
  </div>
  
</body>
</html>