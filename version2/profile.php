<?php
session_start();

?>
<!DOCTYPE html>

	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>HRMate: Profile</title>

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

		<body style="overflow-x:hidden;">
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
                            <li><a href="#"><b><?php echo $_SESSION['Fname'];?></b></a></li>
							<li><a href="#contactWrap">Contact HR</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
	
			

	<div id="featureWrap" style="margin-left:400px; margin-top:200px">
		<div class="container" >
			<div class="row" >
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-tablet icon"></i>
					<h3>Request Leave</h3>
                    <form action="leave.php" method="POST">
					<input type="submit"  value="Put in a word and we'll get back to you soon."></form>
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-pencil icon"></i>
					<h3>Time Sheet Log</h3>
					<input type="button" class="btnShow" id="desperate" value="Leave a ping!">
					
				</div>
			</div>
		</div>
	</div> <!-- /featureWrap -->
	<div id="dialog" style="display: none;width:100%;height:100%;background:rgba(0,0,0,0.8);position:fixed;z-index:3;left:0px;top:0px;" align = "center">
		<div style="background:white;margin:auto;height:200px;width:500px;margin:200px;"><div id="time"></div>	
		<p>Just came in?<a href="timea.php"><input type="button" id="open" onClick="" value='click here'></a></p>
		<p>Leaving?<a href="timed.php"><input type="button" id="open" onClick="" value='click here'></a></p>
		</div></div>
	
	
	
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
						<h2 class="sectionTitle">Contact us</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="blurb">
						Issues? Complaints?... Write to us. <br/>You may send it anonymously if you wish to. 
						</div>
					</div>
				</div>
                    <form name="f1" action="complaint.php" method="post">
					<div class="row">
						<div class="col-sm-4 col-sm-offset-2">
							<div class="inputContainer">
							<label>Department Name</label>
								<input type="text" name="deptName" id="deptName"  class="form-control" required autocomplete="off" />
							</div>
						</div>
						
                        <div class="col-sm-4">
							<div class="inputContainer">
							<label class="screen-reader-text">Subject</label>
								<input type="text" name="subject" id="subject"  class="form-control" required autocomplete="off"  />
							</div>
						</div>
                        
						<div class="col-sm-8 col-sm-offset-2">
							<div class="inputContainer">
							<label class="screen-reader-text">Message</label>
								<textarea name="comments" id="commentsText" class="form-control" required autocomplete="off"></textarea>
							</div>
						</div>
                        
						<div class="col-sm-4 col-sm-offset-2">
							<div class="inputContainer">
							<label>Email(optional)</label>
								<input type="text" name="email" id="email"  class="form-control" autocomplete="off" />
							</div>
						</div>
						
                        <div class="col-sm-8 col-sm-offset-2">
							<button style="background:#E11A49" name="SUBMITC" type="submit" value="Send" class="btn btn-primary btn-lg">Send</button>
						</div>
					</div>
                    </form>
			</div>
		</div>
	</div> <!-- /contactWrap -->*/
	
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
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "jQuery Dialog",
            width: 1600,
            height: 600
        });
            
     
  });
   $("#desperate").on('click',function () {
          //  $('#dialog').dialog('open');
          
          $("#dialog").css('display','block');
			//alert('boobs');
        });

   $("#dialog").on('click',function () {
                $("#dialog").css('display','none');
	    });
        
</script>
    
    
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