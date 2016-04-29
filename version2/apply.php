<?php
session_start();

$job_title=$_GET['job_title'];
$job_id=$_GET['job_id'];
$_SESSION['jobid']=$_GET['job_id'];
$_SESSION['foldername']=$job_title."_".$job_id;
?>
<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>Job Application</title>

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
							<li><a href="#contactWrap">Contact HR</a></li>
							<li><a href="index.html">Home</a></li>
							<li><a href="#featureWrap">Logout</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
			<div id="form"  align="left">
			
            
            
			<form name="job" action="upload.php" method="post" enctype="multipart/form-data" >
					<table id="table" >
					<tr><td><h3>Applicant Details</h3></td></tr>
					<tr><td>Name</td><td><input type="text" name="your-name" value="" size="20"  placeholder="Name" /></td></tr>
					<tr><td>  </td><td>  </td></tr>
					<tr><td>EMail-id</td><td><input type="email" name="your-email" value="" size="20"  placeholder="Email Address" /><br /></td></tr>
                    <tr><td>Phone number</td><td><input type="text" name="your-phone" value="" size="20"  placeholder="Phone Number" /><br /></td></tr>
                    
				
				
					<tr><td>Experience:</td><td> <select name="your-experience-years" ><option value="">Years</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td><td><select name="your-experience-months"><option value="">Months</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option  value="10">10</option><option value="11">11</option></select></td></tr>
                    <tr><td>Notice period:</td><td> <select name="your-notice-period"><option value="">Notice Period</option><option value="1month">1 month</option><option value="2months">2 months</option><option value="3months">3 months</option></select></td></tr>
					<tr><td><input type="text" name="your-current-ctc" value="" size="10"  placeholder="Current CTC (LPA)" /></td></tr>
                    <tr><td><input type="text" name="your-expected-ctc" value="" size="10"  placeholder="Expected CTC (LPA)" /></td></tr>
                    <tr><td><input type="text" name="your-current-location" value="" size="10"  placeholder="Current City" /></td></tr>
                    <tr><td><select name="your-prefLocation" ><option value="">Preferred City</option><option value="Mumbai">Mumbai</option><option value="Chennai">Chennai</option><option value="Bangalore">Bangalore</option><option value="Delhi">Delhi</option></select></td></tr>
                    <tr><td><input type="text" name="your-current-company" value="" size="20"  placeholder="Current Company" /></td></tr>
                    <tr><td><input type='file' name='fileToUpload' id='fileToUpload' placeholder='yo' /></td>
                    <td><input type='text' name='filename' placeholder='What is this?' /></td></tr>
                    <tr><td><textarea name="your-cover-letter"  cols="40" rows="10" placeholder="Write about skills"></textarea></td></tr>

					<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									 <input align="right" name="SUBMIT3" id="apply" type="submit" value="Apply" </td></tr>
				</form>	
			</table>
			</div>	
		</body>
		</html>