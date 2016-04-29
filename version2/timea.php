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
$res=mysqli_query($con,"INSERT into time_audit (Emp_ID,time_in,time_out) VALUES ('$emp','$time','00')");
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