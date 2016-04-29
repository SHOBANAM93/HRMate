<?php
session_start();

if(isset($_POST['SUBMIT5']))
{
$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$ack="no";
$res=mysqli_query($con,"INSERT INTO message(Name,Email,Message,ack) VALUES ('$name','$email','$msg','$ack')");
if($res)
{

echo "<script language=\"javascript\">";
echo "alert('your message sent successfully.')";
echo "</script>";
echo "Record Inserted!";
header("Location:index.html");
}
else
{
echo "message not sent!";
}
}
}
?>