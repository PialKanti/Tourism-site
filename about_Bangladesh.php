<?php
session_start();
?>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
    echo "error".mysql_error();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Bangladesh</title>
    <link rel="shortcut icon" href="Images/logo_travel.png">
	<link rel="stylesheet" href="CSS/about_Bangladesh.css">
</head>
<body>
	<div class="main"><img src="Images/8 - Copy.jpg" id="background">
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
    <h1 class="heading">Bangladesh</h1>
    <hr class="hr1">
    <h2 class="name"><span class="light">Full name:</span>People's Republic of Bangladesh</h2>
    <figure id="flag">
        <img src="Images/bangladesh_flag-1111px.png" alt=""   id="flag_img">
    	<figcaption class="cap1">Flag</figcaption>
    </figure>
    <figure id="emblem">
        <img src="Images/National_emblem_of_Bangladesh.svg" id="emblem_img">
    	<figcaption class="cap2">Emblem</figcaption>
    </figure>
    
    <h2 class="ban_name"><span class="light">In Bengali:</span>গণপ্রজাতন্ত্রী বাংলাদেশ</h2>
    <h4 class="anthem">National Anthem: </h4>
    <div class="audio">
    	<audio controls >
         <source src="audio/Amar Shonar Bangla (music.com.bd).mp3" type="audio/mpeg">
        </audio>
    </div>
    <?php
    $sql="SELECT * FROM about_bangladesh";
    $re=mysql_query($sql) or die(mysql_error());
    while($row=mysql_fetch_array($re)){
    ?>
    <div class="des1">
    	<?php echo $row['Description1']; ?>
    </div>
    <div class="des2">
    	<?php echo $row['Description2']; ?>
    </div>
    <div class="des3">
    	<?php echo $row['Description3']; ?>
    </div>
     <?php   
    }
    ?>
    <hr class="hr2">
    <h3 class="fact">Some facts about Bangladesh</h3>
    <?php
    $s="SELECT * FROM facts_of_bangladesh WHERE(id='Bangladesh')";
    $r=mysql_query($s) or die(mysql_error());
    while($rows=mysql_fetch_array($r)){
    ?>
    <div class="table">
    	<table>
    		<tr cellspacing='0'>
    			<th>Capital:</th>
    			<td><?php echo $rows['capital']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Population:</th>
    			<td><?php echo $rows['population']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>GDP per capita:</th>
    			<td><?php echo $rows['gdp']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Time zone:</th>
    			<td><?php echo $rows['time']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Official languages:</th>
    			<td><?php echo $rows['languages']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Religion:</th>
    			<td><?php echo $rows['religion']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Main Ethnic Groups:</th>
    			<td><?php echo $rows['ethnic']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Drives on the:</th>
    			<td><?php echo $rows['drives']; ?></td>
    		</tr>
    		<tr class='even'>
    			<th>Calling code:</th>
    			<td><?php echo $rows['call_code']; ?></td>
    		</tr>
    	</table>
    </div>
    <?php
    }
    ?>
</body>
</html>