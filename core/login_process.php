<?php
ob_start();
session_start();
include 'dbRegister.php';
$Username=$_POST['userName'];
$Password=$_POST['passWord'];
$sql="SELECT user_id,username,password FROM datatable WHERE (username='$Username' OR email='$Username') AND password='$Password' ";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
	if($row['user_id']){
		if(isset($_POST['remember'])){
			setcookie("Remember_me",$Username,time()+200,"/");
			header("Location:../home.php");
		}
			$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
		    header("Location:../home.php");
            die();
		//if(isset($_COOKIE['Remember_me'])){
	    //$_SESSION['logged_in']='true';
	    //header('Location:../pial.html');
	    //die();
	//}
		
	}
}
header('Location:../login.php?login_error=yes');
?>