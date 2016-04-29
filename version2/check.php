<?php
$_SESSION['Email']=$_POST['email'];
$_SESSION['Password']=$_POST['pwd'];
if((strcmp($_SESSION['Email'],"HR@hitachi.com")==0)&&(strcmp($_SESSION['Password'],"syslock")==0))
header("Location:hrprofile/hrProfile.php");
?>