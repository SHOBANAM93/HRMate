<?php session_start(); ?>
<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>HR-Leave Approval</title>

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
							
							<li><a href="logout.php">Logout</a></li>
                            <li><a href="hrProfile.php">Home</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>

<script language="javascript">
function myFunction()
{
alert('you applied for the job successfully.')";
return false;
}
</script>

<?php

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$res=mysqli_query($con,"SELECT * from leave_requests where approve='no'");

if($res)
{
?>

<body>
<p><b>Leave Requests:</b></p>

<div id="form"  align="left">
<form name="leave" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >

<?php

while($row=mysqli_fetch_array($res))
{
$e=$row['Employee_ID'];
    echo "<table style='padding-bottom:5px' id='table'>
          <tr><td>".$row['Employee_ID']."</td><td>".$row['Name']."</td></tr>
		  <tr><td>Reason for leave</td><td>".$row['Leave_Type']." </td></tr>
		  <tr><td><a href='a.php?emp=$e' class='button button-alt'>Approve?</a></td><td> <a class='button button-alt' href='d.php?emp=$e'>Disaprove</a></td></tr>
		  <tr><td> <a class='button button-alt' href='detail.php?emp=$e' >More Details</a></td></tr>
          </table>";
}
?>
</form>	
			
			</div>	
		</body>
		</html>


<?php
}}

?>