	<?php
session_start();

if(!isset($_POST['SUBMIT4']))
{
?>
<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>Leave Request</title>

			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="css/custom.css" rel="stylesheet">
			<link href="css/flexslider.css" rel="stylesheet">
			
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
			<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
	    </head>
		<body style="background:url('images/red.jpg')no-repeat right;">
			<div style="background:#E11A49" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#topWrap">
						<img style="margin-top:-20px;width:50%;height:300%" src="images/hitachi.png" alt="HITACHI">
						</a>
					</div>
					<div class="collapse navbar-collapse appiNav">
						<ul class="nav navbar-nav">
							<li><a href="profile.php?#contactWrap">Contact HR</a></li>
							<li><a href="profile.php">Home</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
			<div id="form"  align="left">
			
			<form name="leave" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
					<table id="table" >
					<tr><td><h3>Employee Details</h3></td></tr>
					<tr><td>Employee Id</td><td><input type="text" name="your-employee-id" value="" size="20"  placeholder="Employee ID" /></td></tr>
					<tr><td>  </td><td>  </td></tr>
					<tr><td>Name</td><td><input type="text" name="your-name" value="" size="20"  placeholder="Name" /></td></tr>
					<tr><td>EMail-id</td><td><input type="email" name="your-email" value="" size="20"  placeholder="Email Address" /></td></tr>
					<tr><td>Phone</td><td><input type="tel" name="your-phone" value="" size="20"  placeholder="Phone Number" /></td></tr>
					</table>
					<table id="table1">					
					<tr><td><h3>Leave Details</h3></td></tr>
					<tr><td>Type of Leave:</td><td> <select name="leave-type"><option value="">Choose Leave Type</option><option value="HomeTown">HomeTown</option><option value="Emergency">Emergency</option><option value="Ill_Health">Ill Health</option><option value="Project">Project</option><option value="Vacation">Vacation</option><option value="Maternity_Leave">Maternity Leave</option><option value="Death">Death</option><option value="Vacation">Vacation</option><option value="Marriage">Marriage</option></select></td></tr>
					<tr><td>Reason: 	  </td><td> <textarea name="your-reason" cols="40" rows="10" placeholder="Reason for Leave"></textarea></td></tr>
					<tr><td>Leaving On:	  </td><td> <input type="date" name="from" value=""/></td></tr>
					<tr><td>Arriving On:  </td><td> <input type="date" name="to" value=""/></td></tr>
					<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									 <input align="right" name="SUBMIT4" id="apply" type="submit" value="Apply" /></td></tr>
				</form>	
			</table>
			</div>	
		</body>
		
	
<?php
}
else
if(isset($_POST['SUBMIT4']))
{

$emp_id=$_POST['your-employee-id'];
$name=$_POST['your-name'];
$email_id=$_POST['your-email'];
$phone=$_POST['your-phone'];
$leave_type=$_POST['leave-type'];
$reason=$_POST['your-reason'];
$date_from=$_POST['from'];
$date_to=$_POST['to'];


$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$res=mysqli_query($con,"INSERT INTO Leave_Requests(Employee_ID, Name, Email, Telephone, Leave_Type, Reason, From_Date, To_Date,approve) VALUES ('$emp_id','$name','$email_id','$phone','$leave_type','$reason','$date_from','$date_to','no')");
if($res)
{
echo "<script language=\"javascript\">";
echo "alert('you applied for the job successfully.')";
echo "</script>";

}
echo "Record Inserted!";
header("Location:profile.php");
}

mysqli_close($con);

}
else
echo ">.<";
?>

