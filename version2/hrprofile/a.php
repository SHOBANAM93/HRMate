<?php

$em=$_GET['emp'];

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$res=mysqli_query($con,"UPDATE leave_requests SET approve='yes' WHERE  Employee_ID='".$em."'");

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
