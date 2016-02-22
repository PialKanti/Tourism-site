<?php
session_start();
$comment_id=$_GET['id_no'];
$value=$_SESSION['place'];
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
    echo "error".mysql_error();
}
$sql="SELECT dislikes FROM comment WHERE (comment_id='$comment_id')";
$result=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($result);
$count=$row['dislikes'];
$count++;
$s="UPDATE comment SET dislikes='$count' WHERE (comment_id='$comment_id')";
$r=mysql_query($s) or die(mysql_error());
?>

<?php
    $sq="SELECT * FROM comment WHERE (id=$value) ORDER BY comment_id DESC";
    $re=mysql_query($sq) or die(mysql_error());
    while ($rows=mysql_fetch_array($re)) {
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
    <div id="like"><input type="button" name="like" id="<?php echo $rows['comment_id']; ?>" onclick="like_count(this.id)">
      <div id="like_amount"><?php echo $rows['likes']; ?> people</div>
    </div>
    <div id="unlike"><input type="button" name="unlike" id="<?php echo $rows['comment_id']; ?>" onclick="dislike_count(this.id)">
      <div id="unlike_amount"><?php echo $rows['dislikes']; ?> people</div>
    </div>
    </div>
  </div>
    <?php
    } 
    ?>
