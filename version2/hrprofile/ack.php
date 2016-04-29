<?php

$c=$_GET['com'];

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$res=mysqli_query($con,"UPDATE complaint SET ack='yes' WHERE  cno='".$c."'");

if($res)
{

echo "yesssssss";
header("Location:hrProfile.php");
}
else
{

echo "noooooo";

}

}
?>
