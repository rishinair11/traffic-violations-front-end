<?php session_start();

	// Check if logged out.
	if(!(isset($_SESSION['userusername'])))
	{
		header( "Location: index.php" );
	} 

    //Connect to the SQL database.
    //We do this using the mysqli_connect API
    //$connection=mysqli_connect(server,username,password,)
    $connection=mysqli_connect('localhost','root','','trafficvc');
    //Checking the connection.
    if (!$connection) {
        die("Database connection failed.");
    }    

    // Getting aadhar from session variable
    $reporterid=$_SESSION['userusername'];
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


	<!-- Aadhar details query starting -->
    <?php 

        $queryn = "SELECT * FROM aadhardetails where id=$reporterid ";  
        $resultn = mysqli_query($connection, $queryn);  
        while($rown = mysqli_fetch_array($resultn))  
        { 

     ?> 

	<!-- Login Tabs -->
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 style="margin:10%;text-align: center;">Welcome, <?php echo $rown['name'] ?></h1>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-0.3"></div>
			<div class="col-md-11.3" style="padding:0;
		  	box-shadow: 0px 0px 3px rgba(0,0,0,0.4);">
				<!-- Types of Login -->
				<div class="tab">
				  	<button class="tablinks" onclick="openCity(event, 'Report')" id="defaultOpen">Your Offences</button>
				  	<button class="tablinks" onclick="openCity(event, 'History')">History</button>
				</div>

				<!-- Tab content -->
				<!-- Report Login -->
				<div id="Report" class="tabcontent">
				  	<!-- Login -->
	    	        <div class="container" style="width:100%; margin-top:2%;">    
				        <div class="row">
				        	<div class="col-md-1"></div>
				        	<div class="col-md-10">
								<h3 style="margin:1%;text-align: center;">Help</h3>
								<ol style="font-family:Arial; margin-top:1.5%;">
								  	<li>Proof provided is sufficient to clearly prove that an offence was committed.</li>
								  	<li>Fine is charged according to the offence that was committed.</li>
								  	<li>Please pay the fine on time so as to avoid further escalation.</li>
								</ol>
								<hr>
				            </div>
				            <div class="col-md-1"></div>  
				        </div>
				        <h2 style="font-family:Arial;">Your Offences (last 6 months)</h2>            
						  	<table class="table table-bordered" style="font-family:Arial;">
						    	<thead>
							      	<tr>
							        	<th>Proof</th>
							        	<th>Description</th>
							        	<th>Fine</th>
							        	<th>Pay Status</th>
							      	</tr>
						    	</thead>
							    <tbody>
							      	<?php  
                                        $queryv = "SELECT * FROM cases where aadharid=$reporterid ORDER BY datestamp DESC";  
                                        $resultv = mysqli_query($connection, $queryv);  
                                        while($rowv = mysqli_fetch_array($resultv))  
                                        { 
                                    ?> 
                                    <tr>  
                                        <td>  
                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rowv['proof'] ).'" height="200" width="200" class="img-thumnail" /> ' ?> 
                                        </td>
                                        <td>
                                            <?php echo $rowv['description']; ?>
                                        </td>
                                        <td>  
                                            <?php echo $rowv['datestamp']; ?>   
                                        </td>
                                        <td>
                                            <?php 
                                                if($rowv['paystatus']=="0")
                                                {
                                            ?>
                                                    <button type="button" class="btn btn-danger">Pay Now</button>
                                            <?php 
                                                } 
                                            ?>
                                            <?php 
                                                if($rowv['paystatus']=="1")
                                                {
                                            ?>
                                                    <button type="button" class="btn btn-success">Paid</button>
                                            <?php 
                                                } 
                                            ?>
                                        </td>
                                    </tr>
                                    <?php  
                                    }
                                    ?>
							    </tbody>
						  	</table>
			    	</div>
				</div>

				<div id="History" class="tabcontent">
				  	<!-- History -->
	    	        <div class="container" style="width:100%; margin-top:2%;">    
						  	<h2 style="font-family:Arial;">Past Offences</h2>            
						  	<table class="table table-bordered" style="font-family:Arial;">
						    	<thead>
							      	<tr>
							        	<th>Proof</th>
							        	<th>Description</th>
							        	<th>Date</th>
							        	<th>Pay Status</th>
							      	</tr>
						    	</thead>
							    <tbody>
							      	<?php  
                                        $queryv = "SELECT * FROM cases where aadharid=$reporterid ORDER BY datestamp DESC";  
                                        $resultv = mysqli_query($connection, $queryv);  
                                        while($rowv = mysqli_fetch_array($resultv))  
                                        { 
                                    ?> 
                                    <tr>  
                                        <td>  
                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rowv['proof'] ).'" height="200" width="200" class="img-thumnail" /> ' ?> 
                                        </td>
                                        <td>
                                            <?php echo $rowv['description']; ?>
                                        </td>
                                        <td>  
                                            <?php echo $rowv['datestamp']; ?>   
                                        </td>
                                        <td>
                                            <?php 
                                                if($rowv['paystatus']=="0")
                                                {
                                            ?>
                                                    <button type="button" class="btn btn-danger">Pay Now</button>
                                            <?php 
                                                } 
                                            ?>
                                            <?php 
                                                if($rowv['paystatus']=="1")
                                                {
                                            ?>
                                                    <button type="button" class="btn btn-success">Paid</button>
                                            <?php 
                                                } 
                                            ?>
                                        </td>
                                    </tr>
                                    <?php  
                                    }
                                    ?>
							    </tbody>
						  	</table>
			    	</div> 
				</div>
			</div>
			<div class="col-md-0.3"></div>
		</div>
	</div>

	<?php } ?>
    <!-- FOOTER -->
    <div class="footer">
        <p style="color:black;margin-left:5%;font-family:Arial;">© 2019 RTO, Pune · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </div>

    <script type="text/javascript">
    	function openCity(evt, cityName) {
		  	// Declare all variables
		  	var i, tabcontent, tablinks;

		  	// Get all elements with class="tabcontent" and hide them
		  	tabcontent = document.getElementsByClassName("tabcontent");
		  	for (i = 0; i < tabcontent.length; i++) {
		    	tabcontent[i].style.display = "none";
		  	}

		  	// Get all elements with class="tablinks" and remove the class "active"
		  	tablinks = document.getElementsByClassName("tablinks");
		  	for (i = 0; i < tablinks.length; i++) {
		    	tablinks[i].className = tablinks[i].className.replace(" active", "");
		 	}

		  	// Show the current tab, and add an "active" class to the button that opened the tab
		  	document.getElementById(cityName).style.display = "block";
		  	evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
    </script>
</body>
</html> 


