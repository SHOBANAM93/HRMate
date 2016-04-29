<!DOCTYPE HTML>
<html>
<head>
<title>Profile</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>

<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>

<script src="js/easing.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>	
</head>
<body>
	<!----Header srarts Here ------------>
	<div class="sform">
			<form method="POST" action="people.php" id="sform">
			<!--<input type="text" name="sr" /> !-->
			<input type="submit" name="SEARCH" value="Explore friends...">
			</form>
			<form action="request.php" method="POST"><input type="submit" name="friends" value="Check pending friend request..."/></form>
			
			<form action="delete.php" method="POST"><input type="submit" name="lg" value="LOGOUT..."/></form>
			</div>
	<div class="header sTop" id="home">
		<div class="container">
			
			<div class="logo">
				 <a href="index.html"><img src="images/Luma.ico" alt=""></a>
				 <p>Welcome!!! </p>
			</div>
			</br>
			</br>
			<div>
			<?php 	session_start();
			
			if(!isset($_SESSION['Name']))
			{
				header("Location: home.html");
			}
			?>
				<a href="#myservices" class="scroll"><img src="images/mouse.png" /></a>
				<p>Scroll</p>
			</div>
		</div>
		</div>	
	<!----Header srarts Here ------------>
	<!-- Navigation Starts Here ---------->
	<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 737px;">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <img src="images/nav-icon.png" title="drop-down-menu"> 
	                </button>
	            </div>
	            <a id="sTop" class="right-msg subNavBtn msg-icon" href="index.html"><span> </span></a>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="navbar-collapse navbar-left navbar-main-collapse collapse" style="height: 1px;">
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="page-scroll">
	                        <a id="sTop" class="subNavBtn active" href="#">Home</a>
	                    </li>
	                    <li class="active">
	                        <a id="s1" class="subNavBtn" href="#">Services</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s2" class="subNavBtn" href="#">Gallery</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s3" class="subNavBtn" href="#">Interests</a>
	                    </li>
	                   <li class="page-scroll">
	                        <a id="s4" class="subNavBtn" href="#">Contacts</a>
	                    </li>
	                   <!-- <li class="page-scroll">
	                        <a id="s5" class="subNavBtn" href="#">Contact</a>
	                   </li>-->
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	                <div class="clearfix"> </div>
	        </div>
	        <!-- /.container -->
   	  </nav>
   
	<!-- Navigation Ends Here ---------->
	<!---- Services Starts Here ---->
	<div class="services s1" id="myservices">
		<div class="container">
			<div class="row services-row"></br></br></br></br></br>
				<h3>Services</h3>
				<div class="col-md-4 services-row-column">
					
					<h4><a href="interests.html">
					<i class="icon1"></i>
					</br>Interests</a></h4>
					<small>Interests</small>
					<p>bblah blah</p>
				</div>
				<div class="col-md-4 services-row-column">
					
					<h4><a href="main.html">
					<i class="icon2"></i>
					</br>Edit Profile</a></h4>
					<small>yayy time to fix :P</small>
					<p>waah waah</p>
				</div>
				<div class="col-md-4 services-row-column">
					
					<h4><a href="#">
					<i class="icon3"></i>
					<br/>Pics</a></h4>
					<small>Add and view *click*click*</small>
					<p>kachaaaw!!!</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---- Services Ends Here ---->
	<!-- Gallery Starts Here ----->
	<div class="work s2" id="mywork">
		<div class="container">
			<div class="work-top">
				<h3>Gallery</h3>
				
			</div>
			<!---- GAllery ------>
			<div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		</div>
	</div>
	<!-- Work Ends Here ----->
	<!-- Careers status starts here --->
	<div class="career s3" id="info">
		<div class="container">
		<div class="wrap">
			<h3 class="m_2">Interests</h3>	
			<small class="m-2-s">Likes<span>...Loves</span> </small>
		<div class="career-top"
		</div>
			  <div class="gallery autoplay items-3">
			    <?php 
						$con=mysqli_connect("localhost","root","","project");

						$db=mysqli_select_db($con,"project");
						
						if(isset($_GET['user']))
						{
						$u=$_GET['user'];
						$sql1="SELECT * FROM ".$u."books";
						$sql2="SELECT * FROM ".$u."movies";
						$sql3="SELECT * FROM ".$u."tv";
						}
						else{
						$self=$_SESSION['Name'];
						$sql1="SELECT * FROM ".$self."books";
						$sql2="SELECT * FROM ".$self."movies";
						$sql3="SELECT * FROM ".$self."tv";
						}
						$res1=mysqli_query($con,$sql1);
						$res2=mysqli_query($con,$sql2);
						$res3=mysqli_query($con,$sql3);
						while($row=mysqli_fetch_array($res1))
						{
							echo "Book Name: ".$row['bname']."&nbsp;&nbsp;";
							echo "Book Author: ".$row['bname']."<br/>";
							}
						while($row2=mysqli_fetch_array($res2))
						{
							echo "Movie Name: ".$row2['mname']."&nbsp;&nbsp;";
							echo "Movie Director: ".$row2['mdirector']."<br/>";
							}
						while($row3=mysqli_fetch_array($res3))
						{
							echo "TV Show Name: ".$row3['tname']."&nbsp;&nbsp;";
							echo "TV Show Director: ".$row3['tdirector']."<br/>";
							}
						
				?>
				
				</div>
			  </div>
			</div>
		</div>
		</div>
	</div>
	<!-- Careers status ends here --->
	<!-- Twitter Starts Here -------->
	
	<!-- Twitter Ends Here -------->
	<!--- Contact Starts Here ------>
	<div class="contact s4" id="contact">
		<div class="container">
			<div class="contact-top">
				<h3>THIS IS ME...</h3>
			</div>
			<?php 
				if(isset($_GET['user']))
				{
				$u=$_GET['user'];
				$sql4="SELECT * FROM profileform where name='$u'";
				}
				else{
				$s=$_SESSION['Name'];
				$sql4="SELECT * FROM profileform where name='$s'";
					}
					$result=mysqli_query($con,$sql4);
					while($r=mysqli_fetch_array($result))
					{
						echo "Name: ".$r['name']."<br/>";
						echo "Age: ".$r['age']."<br/>";
						echo "Phone Number: ".$r['phno']."<br/>";
						echo "Status: ".$r['status']."<br/>";
						echo "Relation: ".$r['relation']."<br/>";
						echo "Home Town: ".$r['htown']."<br/>";
						echo "Living: ".$r['living']."<br/>";
					}
			?>
		</div>		
	</div
	<!--- Contact Ends Here ------>
	<!--- Footer Starts Here ------>
	<div class="footer sTop" id="footer">
		<div class="container">
			
			
			
			<div class="clearfix"> </div>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
	</div>
	<!--- Footer Ends Here ------>
<script src="js/bootstrap.min.js"></script>
</body>