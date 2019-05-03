<?php session_start();

	if(!(isset($_SESSION['authusername'])))
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
	</style>
</head>
<body>

	<!-- Navbar  -->
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
                <a href="welcome_auth_view.php" class="navbar-brand"><span style="font-weight: bolder;"><img src="rto.png"> RTO</span></a>
            </div>
                <!-- To collapse the links that are below like About, Contact, Login, Signup -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="nav navbar-nav">
                    <!-- target attribute is used to open in new tab. -->
                    <li><a href="welcome_auth_view.php" data-toggle="tooltip" title="Latest offences pending approval!">LATEST OFFENCES</a></li>
                    <li><a href="auth_aadhar_details.php" data-toggle="tooltip" title="Look up aadhar details!">AADHAR DETAILS</a></li>
                    <li><a href="auth_vehicle_registration.php" data-toggle="tooltip" title="Look up registration details for a vehicle!">VEHICLE REGISTRATION</a></li>
                </div>
                <!-- To assign the below links to the right of the navbar -->
                <div class="nav navbar-nav navbar-right">
                    <li><a href="aContactUs.php">CONTACT US      </a></li>
                    <li><a href="destroy_session.php">SIGN OUT    <span class="fa fa-sign-out"></span></a></li>
                </div>
            </div>
        </div>
    </nav>

	<!-- Content -->
	<div class="container pagecontainer">
    	<div class="col-sm-0.4"></div>
    	<div class="col-sm-11.2">
    		<div class="container">
    			<!--Maps-->
				<div id="googleMap" style="margin-left:-30px;width:100%;height:400px;"></div>

				<script>
				function myMap() {
					var mapProp= {
				    	center:new google.maps.LatLng(18.5305, 73.8636),
				    	zoom:20,
					};
					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv0dis7u8NEKTdCoa_iY57o4R33q2Yx9c&callback=myMap">
				</script>
				    		
				<hr class="style13">

		    	<p style="padding-left:20px; font-family: Arial;" > 	
		    		<strong>
					RTO, Pune is a website designed at Vishwakarma Institute of Technology.
					<br><br>
					You can reach us by:
					<br><br>
					Phone:8888888888
					<br><br>
					Email:sample@vit.edu
					<br><br>
					Social Media:
					<br> 
					<a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i><span> : facebook.com</span></a>
					<br>
					<a target="_blank" href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> : twitter.com</span></a>
					<br>
					<a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i><span> : instagram.com</span></a>
					</strong>
				</p>
    		</div>
		<div class="col-sm-0.4"></div>
    </div>

	<br>
	<br>
    <!-- FOOTER -->
    <div class="footer">
        <p style="color:black;margin-left:5%;font-family:Arial;">© 2019 RTO, Pune · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </div>

</body>
</html> 


