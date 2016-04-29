<?php
session_start();
if(isset($_POST['SUBMIT']))
{
$empid=$_POST['empID'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pwd'];

$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{

$res=mysqli_query($con,"INSERT INTO NewUser(EmpID,Email, FName, LName, Password) VALUES ('$empid','$email','$fname','$lname','$pass')");
if($res)
{
echo "<script language=\"javascript\">";
echo "alert('you are registered successfully.')";
echo "</script>";

}
echo "Record Inserted!";
header("Location:index.html");
}

mysqli_close($con);

}
else
echo ">.<";
?>