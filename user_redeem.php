<?php session_start();

	if(!(isset($_SESSION['userusername'])))
	{
		header( "Location: index.php" );
	} 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>RTO-Pune</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Font awesome CDN -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--Google Fonts CDN-->
	<link href="https://fonts.googleapis.com/css?family=Courgette|Raleway:400,700" rel="stylesheet">

	<style type="text/css">
		body{
			/*BACKGROUND*/

	      	/*padding-top:50px;
	      	width:100%;
	      	position:absolute;
	      	background-image: url("Portrait.jpg");
	      	background-repeat: repeat;
	      	background-size: cover;
	      	background-position: center;*//*
	      	background: #c2e59c;
			background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c);
			background: linear-gradient(to right, #64b3f4, #c2e59c);*/

			/*FONT*/
			font-family: Raleway;
  		}
			
  		/*Footer*/
		.footer {
			position: relative;
			bottom: 0;
			width: 100%;
			color: black;
		}

		/*Login Tabs*/
		.tab {
		  	overflow: hidden;
		  	border: 1px solid #ccc;
		  	background-color: #f1f1f1;
		}

		/* Style the buttons that are used to open the tab content */
		.tab button {
		  	background-color: inherit;
		  	float: left;
		  	border: none;
		 	outline: none;
		  	cursor: pointer;
		  	padding: 14px 16px;
		  	transition: 0.3s;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		  	background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
		  	/*background-color: #ccc;*/
		  	background-color: #2980e9;
    		color: white;
		}

		/* Style the tab content */
		.tabcontent {
		  	display: none;
		  	padding: 6px 12px;
		  	border: 1px solid #ccc;
		  	border-top: none;
		  	background-color: white;
		}

		/*Login tabs fade css*/
		.tabcontent {
  			animation: fadeEffect 1s; /* Fading effect takes 1 second */
		}

		/* Go from zero to full opacity */
		@keyframes fadeEffect {
  			from {opacity: 0;}
  			to {opacity: 1;}
		}

		/*Navbar*/
		.navbar-inverse{
			background: #283048;  /* fallback for old browsers */
	    	background: -webkit-linear-gradient(to right, #859398, #283048);  /* Chrome 10-25, Safari 5.1-6 */
	    	background: linear-gradient(to right, #859398, #283048); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	    	box-shadow: 0px 0px 10px #161616;
		}

	  	.navbar-inverse .navbar-nav>li>a:hover{
	    	color:#0ec6d3;
	 	} 

	  	.navbar-inverse .navbar-brand:hover{
	    	color:#0ec6d3;
	  	}

		.navbar-inverse .navbar-nav>li>a{
			color:white;
			font-family: Raleway;
			font-weight: normal;
	    	font-size: 15px;
		} 

		.navbar-inverse .navbar-brand{
			color: white;
			font-family: Raleway;
		}

		.cont-style{
			background: #c2e59c;
			background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c);
			background: linear-gradient(to right, #64b3f4, #c2e59c);
		}
	</style>
</head>
<body>

	<!-- Navbar	 -->
	<!-- Create the navbar. navbar-fixed-top to fix navbar to the top-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<!-- Put the navbar inside the container to center the navbar content -->
		<div class="container" style="margin-left: 2%; margin-right:2%;">
			<!-- For creating the brand name we use navbar header -->
			<div class="navbar-header">
				<!-- For creating the 3 line icon for mobile view -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="width:100%;">
			        <span class="sr-only">Toggle navigation</span>
			        <!-- This is used to create one line in the icon -->
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			     </button>
			     <!-- Naming the brand and assigning it a link -->
				<a href="welcome_user_report.php" class="navbar-brand"><span style="font-weight: bolder;"><img src="rto.png"> RTO</span></a>
			</div>
				<!-- To collapse the links that are below like About, Contact, Login, Signup -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="nav navbar-nav">
					<!-- target attribute is used to open in new tab. -->
	                <li><a href="welcome_user_report.php" data-toggle="tooltip" title="Report an offence!">REPORT OFFENCE</a></li>
					<li><a href="user_view.php" data-toggle="tooltip" title="View and pay for your offences!">YOUR OFFENCES</a></li><!--data toggle is used to enable tooltips-->
					<li><a href="user_redeem.php" data-toggle="tooltip" title="Redeem the credits accumulated!">CREDITS</a></li><!--data toggle is used to enable tooltips-->
				</div>
				<!-- To assign the below links to the right of the navbar -->
				<div class="nav navbar-nav navbar-right">
					<li><a href="ContactUs.php">CONTACT US    	</a></li>
					<li><a href="destroy_session.php">SIGN OUT    <span class="fa fa-sign-out"></span></a></li>
				</div>
			</div>
		</div>
	</nav>

	<div class="container cont-style" style="margin-top:10%; font-family:Arial; box-shadow: 0px 0px 10px black; padding: 7%;">
		<div class="row">
			<div class="col-md-4"><h1>Your Credits:</h1></div>
			<div class="col-md-6"><h1>50</h1></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row" style="margin-top:4%;">
			<div class="col-md-4"><button type="button" class="btn btn-primary btn-lg">Redeem Now</button></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<br>
	<br>
    <!-- FOOTER -->
    <div class="footer">
        <p style="color:black;margin-left:5%;font-family:Arial;">© 2019 RTO, Pune · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </div>

</body>
</html> 


