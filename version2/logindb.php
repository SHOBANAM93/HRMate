<?php

session_start();
if(isset($_POST['SUBMIT2']))
{
$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$result=mysqli_query($con,"SELECT * FROM NewUser where Email='".$_POST['email']."'and Password='".$_POST['pwd']."'") or
die(mysqli_error($con));

$duplicate=mysqli_num_rows($result);
if($duplicate==0)
{
echo "<script language=\"javascript\">";
echo "alert('Username or password wrong!!')";
echo "</script>";
}

else if($duplicate==1)
{
$_SESSION['Email']=$_POST['email'];
$_SESSION['Password']=$_POST['pwd'];

while($row=mysqli_fetch_array($result))
{
$_SESSION['empID']=$row['EmpID'];
$_SESSION['Fname']=$row['FName'];
$_SESSION['Lname']=$row['LName'];
}
header("Location:profile.php");

}

else
{
echo "<script language=\"javascript\">";
echo "alert('Error!!')";
echo "</script>";
}}
else
echo "-_-";
}
else
echo "noooo!!!";
?>