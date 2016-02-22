<?php
    session_start();
    $con=mysql_connect("localhost","root","");
    mysql_select_db("pial",$con);
    $user =$_SESSION['username'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UserPage</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" type="text/css" href="CSS/UserPage.css">
</head>
<body>
    <div class="main"><img src="Images/blur_22834.jpg" id="background">
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
 $search="SELECT * FROM datatable WHERE (username='$user')";
    $result= mysql_query($search);
    if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
    }
    while ($row=mysql_fetch_array($result)) {
    ?>
	<span id="heading"><h1 id="heading"><?php echo $row['username']; ?></h1></span>
    <hr class="hr1">
    <div class="p1"><p>Your Bio</p></div>
    <div class="table">
    <table>
        <tr>
            <td>Full Name:</td>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <tr>
            <td>Email Addrees:</td>
            <td ><?php echo $row['email']; ?></td>
        </tr>
        <?php
        if($row['Place']){
        ?>
        <tr>
            <td>Lives In:</td>
            <td><?php echo $row['Place']; ?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td>Mobile Number:</td>
            <td><?php echo $row['mobile']; ?></td>
        </tr>
        <tr>
            <td>Member since:</td>
            <td><?php echo $row['member_date']; ?></td>
        </tr>
        <?php
        if($row['favourite']){
        ?>
        <tr>
            <td>Favourite Tourisum Place:</td>
            <td><?php echo $row['favourite']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <div class="proPic"><img src="<?php echo $row['image_link']; ?>" class="img1"></div>
    <form action="userForm.php">
    <span class="button"><input type="submit" name="click" class="b1" value="Edit"></span>
    <?php
    if($row['about']){
    ?>
    <div id="heading1"><h1 id="heading1">About You</h1>
        <div id="para"><?php echo $row['about']; ?></div>
        <hr class="hr2">
    </div>
    
    <?php
    }
    ?>
    </form>
    <?php 
        if($row['admin']==1){
        ?>
        <div id="admin_panel">
        <div id="heading2"><h1 id="heading1">Admin Panel</h1></div>
        <form action="add_district.php">
            <div class="button0"><input type="submit" name="add" class="b" value="Add District"></div>
        </form>
        <form action="add_place.php">
            <div class="button1"><input type="submit" name="add" class="b2" value="Add a place"></div>
        </form>
        <form action="update_facts_of_bangladesh.php">
            <div class="button2"><input type="submit" name="update" class="b3" value="Update Bangldesh data"></div>
        </form>
        <form action="delete_place.php">
            <div class="button3"><input type="submit" name="delete" class="b4" value="Delete"></div>
        </form>
        <form action="manage_account.php">
            <div class="button4"><input type="submit" name="account" class="b5" value="Manage Accounts"></div>
        </form>
        </div>
        <?php
        }
        ?>
        ?>
    <?php
    }
    ?>
    </div>
</body>
</html>