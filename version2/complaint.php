<?php
session_start();

if(isset($_POST['SUBMITC']))
{
$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$ack="no";
$dept=$_POST['deptName'];
$subj=$_POST['subject'];
$comp=$_POST['comments'];
if($_POST['email']!="")
{
$email=$_POST['email'];
}
else
$email="NA";

$res=mysqli_query($con,"INSERT INTO Complaint(Department,Subject,Complain,Email,ack) VALUES ('$dept','$subj','$comp','$email','$ack')");
if($res)
{
echo "<script language=\"javascript\">";
echo "alert('your complaint registered successfully.')";
echo "</script>";
echo "Record Inserted!";
header("Location:profile.php");
}
else
{
echo "complaint not registered!";
}
}
}
?>