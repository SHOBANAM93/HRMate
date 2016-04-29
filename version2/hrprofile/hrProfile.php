<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>HR Profile</title>

			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="css/custom.css" rel="stylesheet">
			<link href="css/flexslider.css" rel="stylesheet">
			
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
		</head>

		<body>
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
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
	
			

	<div id="featureWrap" style="margin-left:50px; margin-top:200px">
		<div class="container" >
			<div class="row" >
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-tablet icon"></i>
					<h3>Review Leave</h3>
					<input type="button"  value="Pending Leave Requests" onClick="parent.location='approve.php'">
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-pencil icon"></i>
					<h3>Job Listings</h3>
					<input type="button"  value=" Applicant List!" onClick="parent.location='applicant.php'">
					
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-pencil icon"></i>
					<h3>Company Feedback</h3>
					<input type="button"  value="Know the Buzz!" onClick="parent.location='readData.php'">
					
				</div>
			</div>
		</div>
	</div> <!-- /featureWrap -->
	<div id="dialog" style="display: none" align = "center">
		<div id="time"></div>	
		<p>Just came in?<input type="button" id="open" onClick="" value='click here'></p>
		<p>Leaving?<input type="button" id="open" onClick="" value='click here'></p>
		</div>
	<script type="text/javascript">
    $(function () {
	
        $("#dialog").dialog({
		
            modal: true,
            autoOpen: false,
            title: "jQuery Dialog",
            width: 1600,
            height: 600
        });
        $(".btnShow").click(function () {
		alert("heyy");
            $('#dialog').dialog('open');
			
        });
            
  
    });
	
</script>
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<hr>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div id="contactWrap">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">Lodged Complaints</h2>
					</div>
				</div>
				
					<?php

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$res=mysqli_query($con,"SELECT * from complaint where ack='no'");

if($res)
{
?>

<div id="form"  align="left">

<?php

while($row=mysqli_fetch_array($res))
{
$c=$row['cno'];
    echo "<table style='margin-bottom:20px;background:rgba(255, 218, 185,0.8);'><tr><td>Department: ".$row['Department']."</td><td>Subject: ".$row['Subject']."</td></tr>
		  <tr><td>Email: ".$row['Email']." </td><td>Complaint: ".$row['complain']." </td></tr>
		  <tr><td><a href='ack.php?com=$c'>Acknowledge?</a></td><td> <a href='ig.php?com=$c'>Ignore?</a><br></td></tr></table>";
		  
}
?>
	
			</div>	
		
<?php
}}

?>
			</div>
		</div>
	</div> <!-- /contactWrap -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<p>Also look us up on..</p>
					<p class="social">
						<a href="https://www.facebook.com/HitachiHLI">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://twitter.com/Hitachi_US?ref_src=twsrc^google|twcamp^serp|twgr^author">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://plus.google.com/+hitachidatasystems/posts">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://www.youtube.com/user/HitachiBrandChannel">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.js"></script>
	
<script type="text/javascript">
$(document).ready(function() {

	$('.mobileSlider').flexslider({
		animation: "slide",
		slideshowSpeed: 3000,
		controlNav: false,
		directionNav: true,
		prevText: "&#171;",
		nextText: "&#187;"
	});
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false
	});
		
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if ($(window).width() < 768) {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar-header').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}
			else {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}

		}
	});
	
	$('#toTop').click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
	});
	
	var timer;
    $(window).bind('scroll',function () {
        clearTimeout(timer);
        timer = setTimeout( refresh , 50 );
    });
    var refresh = function () {
		if ($(window).scrollTop()>100) {
			$(".tagline").fadeTo( "slow", 0 );
		}
		else {
			$(".tagline").fadeTo( "slow", 1 );
		}
    };
		
});
</script>
  </body>
</html>