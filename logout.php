<?php
session_start();
session_unset();
session_destroy();
setcookie("Remember_me",$Username,time()-200,"/");
header('Location:home.php');
?>