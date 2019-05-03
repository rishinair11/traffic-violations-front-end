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
	      	background-position: center;*/
	      	background: #c2e59c;
			background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c);
			background: linear-gradient(to right, #64b3f4, #c2e59c);

			/*FONT*/
			font-family: Raleway;
  		}
			
  		/*Footer*/
		.footer {
			position: fixed;
			bottom: 0;
			width: 100%;
			color: white;
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
	</style>
</head>
<body>

	<!-- Login Tabs -->
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 style="margin:10%;text-align: center;">Welcome to RTO, Pune</h1>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="padding:0;
		  	box-shadow: 0px 0px 3px rgba(0,0,0,0.4);">
				<!-- Types of Login -->
				<div class="tab">
				  	<button class="tablinks" onclick="openCity(event, 'User')" id="defaultOpen">User</button>
				  	<button class="tablinks" onclick="openCity(event, 'Register')">Register</button>
				  	<button class="tablinks" onclick="openCity(event, 'Authority')">Authority</button>
				</div>

				<!-- Tab content -->
				<!-- User Login -->
				<div id="User" class="tabcontent">
				  	<!-- Login -->
	    	        <div class="container" style="width:100%; margin-top:2%;">    
				        <div class="row">
				        	<div class="col-md-2"></div>
				        	<div class="col-md-8">                    
					            <div class="panel panel-info" >
					                    <div class="panel-heading">
					                        <div class="panel-title">Sign In</div>
					                        <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
					                    </div>     

					                    <div style="padding-top:30px" class="panel-body" >

					                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					                            
					                        <form method="post" action="verify_credentials.php" id="loginform" class="form-horizontal" role="form">
					                                    
					                            <div style="margin-bottom: 25px" class="input-group">
					                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					                                <input id="login-username" type="text" class="form-control" name="userusername" value="" placeholder="Aadhar Id">                                        
					                            </div>
					                                
					                            <div style="margin-bottom: 25px" class="input-group">
					                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					                                <input id="login-password" type="password" class="form-control" name="userpassword" placeholder="Password">
					                            </div>


					                            <div style="margin-top:10px" class="form-group">
					                            <!-- Button -->
					                            	<div class="col-md-4"></div>
					                            	<div class="col-md-4">
					                                    <input class="btn btn-success" name="usersubmit" value="Login" type="submit" class="form-control" style="width:100%;">
					                                    <!-- <a id="btn-fblogin" href="https://www.facebook.com" class="btn btn-primary">Login with Facebook</a> -->
					                                    <!-- <input type='button' style="width:100%;" value='Login' class="btn btn-success" onclick="document.location.href='welcome_user_report.php';"/> -->
					                                </div>
					                                <div class="col-md-4"></div>
					                            </div>


					                            <div class="form-group">
					                                <div class="col-md-12 control">
					                                        <!-- <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
					                                            Don't have an account! 
					                                        <a href="Register.php">
					                                            Sign Up Here
					                                        </a>
					                                        </div> -->
					                                </div>
					                            </div>    
					                        </form>     
					                    </div>                     
					            </div>
				            </div>
				            <div class="col-md-2"></div>  
				        </div>
			    	</div>
				</div>

				<div id="Register" class="tabcontent">
				  	<!-- Register -->
	    	        <div class="container" style="width:100%; margin-top:2%;">    
				        <div class="row">
				        	<div class="col-md-2"></div>
				        	<div class="col-md-8">                    
					            <div class="panel panel-info" >
					                    <div class="panel-heading">
					                        <div class="panel-title">Register</div>
					                        <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
					                    </div>     

					                    <div style="padding-top:30px" class="panel-body" >

					                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					                            
					                        <form method="post" action="verify_credentials.php" id="loginform" class="form-horizontal" role="form">
					                                    
					                            <div style="margin-bottom: 25px" class="input-group">
					                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					                                <input id="login-username" type="text" class="form-control" name="regusername" value="" placeholder="Aadhar Id">                                        
					                            </div>
					                                
					                            <div style="margin-bottom: 25px" class="input-group">
					                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					                                <input id="login-password" type="password" class="form-control" name="regpassword" placeholder="Password">
					                            </div>

					                            <div style="margin-top:10px" class="form-group">
					                            <!-- Button -->
					                            	<div class="col-md-4"></div>
					                            	<div class="col-md-4">
					                                    <input class="btn btn-primary" name="regsubmit" value="Register" type="submit" class="form-control" style="width:100%;"> 
					                                    <!-- <a id="btn-fblogin" href="https://www.facebook.com" class="btn btn-primary">Login with Facebook</a> -->
					                                </div>
					                                <div class="col-md-4"></div>
					                            </div>


					                            <div class="form-group">
					                                <div class="col-md-12 control">
					                                        <!-- <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
					                                            Don't have an account! 
					                                        <a href="Register.php">
					                                            Sign Up Here
					                                        </a>
					                                        </div> -->
					                                </div>
					                            </div>    
					                        </form>     
					                    </div>                     
					            </div>
				            </div>
				            <div class="col-md-2"></div>  
				        </div>
			    	</div> 
				</div>

				<div id="Authority" class="tabcontent">
				  	<!-- Login -->
	    	        <div class="container" style="width:100%; margin-top:2%;">    
				        <div class="row">
				        	<div class="col-md-2"></div>
				        	<div class="col-md-8">                    
					            <div class="panel panel-info" >
					                    <div class="panel-heading">
					                        <div class="panel-title">Sign In</div>
					                        <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
					                    </div>     

					                    <div style="padding-top:30px" class="panel-body" >

					                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					                            
					                        <form method="post" action="verify_credentials.php" id="loginform" class="form-horizontal" role="form">
					                                    
					                            <div style="margin-bottom: 25px" class="input-group">
					                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					                                <input id="login-username" type="text" class="form-control" name="authusername" value="" placeholder="Officer Id">                                        
					                            </div>
					                                
					                            <div style="margin-bottom: 25px" class="input-group">
					                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					                                <input id="login-password" type="password" class="form-control" name="authpassword" placeholder="Password">
					                            </div>


					                            <div style="margin-top:10px" class="form-group">
					                            <!-- Button -->
					                            	<div class="col-md-4"></div>
					                            	<div class="col-md-4">
					                                    <input class="btn btn-success" name="authsubmit" value="Login" type="submit" class="form-control" style="width:100%;">
					                                    <!-- <a id="btn-fblogin" href="https://www.facebook.com" class="btn btn-primary">Login with Facebook</a> -->

					                                </div>
					                                <div class="col-md-4"></div>
					                            </div>


					                            <div class="form-group">
					                                <div class="col-md-12 control">
					                                        <!-- <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
					                                            Don't have an account! 
					                                        <a href="Register.php">
					                                            Sign Up Here
					                                        </a>
					                                        </div> -->
					                                </div>
					                            </div>    
					                        </form>     
					                    </div>                     
					            </div>
				            </div>
				            <div class="col-md-2"></div>  
				        </div>
			    	</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

    <!-- FOOTER -->
    <div class="footer">
        <p style="color:white;margin-left:5%;font-family:Arial;">© 2019 RTO, Pune · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
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


