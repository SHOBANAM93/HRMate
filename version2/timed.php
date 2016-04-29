<?php
session_start();

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$time = time(); 
$emp=$_SESSION['empID'];
$res=mysqli_query($con,"UPDATE time_audit SET time_out='".$time."' WHERE Emp_ID='".$emp."'");
if($res)
{

echo "<script language=\"javascript\">";
echo "alert('your time sent successfully.')";
echo "</script>";
echo "Record Inserted!";
header("Location:profile.php");
}
}
?>