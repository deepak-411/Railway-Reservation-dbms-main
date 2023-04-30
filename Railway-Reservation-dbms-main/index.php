<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Indian Railways </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body style="background-image: url(images/bg.jpg); backdrop-filter:blur(8px);">

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.png"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				
				<a href="index.php" style="color:orangered;">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="display.php">BOOKING HISTORY</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/1.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/2.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/3.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/5.jpg" style="width:600px;height:350px;"/></div>
				
				<div class="item"><img src="images/4.jpg"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<h1 style="color:red"><center>Note</center></h1>
				<p><b>No refund shall be granted on the confirmed ticket after four hours before
					the scheduled departure of the train.
				</b></p>
				</br>
				<p><b>No refund shall be granted on the RAC or waitlisted ticket after thirty minutes 
					before the scheduled departure of the train.
				</b></p></br>
				<p><b>In case, on a party e-ticket or a family e-ticket issued for travel of more than 
					one passengers have confirmed reservation and others are on RAC or waiting list, full
					refund of fare, less clerkage, shall be admissible for confirmed passengers also subject 
					to the condition that the ticket shall be cancelled online.
				</b></p></br>
				<p><b>Before cancellation, please refer new refund rule 2015 w.e. 12-Nov-2015</b></p></br>
				
				</div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; all copyright reserved</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : supriya revanwar</p>
			</div>
		</div>
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>