<!DOCTYPE html>
<html>
  <head>
    <title></title>

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

  </head>
  <body>
    <?php session_start();    
      
      // USER LOGIN
      if(isset($_POST['usersubmit']))
      {
          $userusername=$_POST['userusername'];
          $userpassword=$_POST['userpassword'];

          $_SESSION['userusername']=$_POST['userusername'];
          $_SESSION['userpassword']=$_POST['userpassword'];
          
          //Connect to the SQL database.
          //We do this using the mysqli_connect API
          //$connection=mysqli_connect(server,username,password,)
          $userconnection=mysqli_connect('localhost','root','','trafficvc');
          //Checking the connection.
          if (!$userconnection) {
              die("Database connection failed.");
          }
          // Check of both the fields are entered.
          if ($userusername=="" || $userpassword=="") {
              echo '<script language="javascript">';
              echo 'alert("Id or Password field not set.")';
              echo '</script>';
          }
          else
          {

              // To prevent SQL Injection:
              // mysqli_real_escape_string(connection_name,parameter_name);
              // This function is used to escape characters like ',() etc. and gives cleaned code which is then assigned to the variable on the left.
              $userusername=mysqli_real_escape_string($userconnection,$userusername);
              $userpassword=mysqli_real_escape_string($userconnection,$userpassword);

              $userquery="select * from usercredentials where id='$userusername' and password='$userpassword'";
              // mysqli_query(connection,query);
              $userresult=mysqli_query($userconnection,$userquery);
              // Check if query is successfull.
              if (!$userresult) {
                  // To die means to want all commands to stop and display the error message.
                  die('QUERY FAILED'.mysqli_error());
              }
              $userrow=mysqli_fetch_array($userresult);
              if(($userrow["id"] == $userusername) && ($userrow["password"] == $userpassword))
              {
                  // Used to redirect to other page.
                  header( "Location: welcome_user_report.php" );
              }
              else
              {
                  echo '<script language="javascript">';
                  echo 'alert("Incorrect id or password! Please try again.")';
                  echo '</script>';           
              }
          }
      }

      // REGISTER USER

      if(isset($_POST['regsubmit']))
      {
          $regusername=$_POST['regusername'];
          $regpassword=$_POST['regpassword'];

          $_SESSION['regusername']=$_POST['regusername'];
          $_SESSION['regpassword']=$_POST['regpassword'];

          //Connect to the SQL database.
          //We do this using the mysqli_connect API
          //$connection=mysqli_connect(server,regname,password,)
          $regconnection=mysqli_connect('localhost','root','','trafficvc');
          //Checking the connection.
          if (!$regconnection) {
              die("Database connection failed.");
          }
          // Check of both the fields are entered.
          if ($regusername=="" || $regpassword=="") {
              echo '<script language="javascript">';
              echo 'alert("Id or Password field not set.")';
              echo '</script>';
          }
          else
          {

              // To prevent SQL Injection:
              // mysqli_real_escape_string(connection_name,parameter_name);
              // This function is used to escape characters like ',() etc. and gives cleaned code which is then assigned to the variable on the left.
              $regusername=mysqli_real_escape_string($regconnection,$regusername);
              $regpassword=mysqli_real_escape_string($regconnection,$regpassword);

              $query="select * from aadhardetails where id='$regusername'";
              // mysqli_query(connection,query);
              $result=mysqli_query($regconnection,$query);
              // Check if query is successfull.
              if (!$result) {
                  // To die means to want all commands to stop and display the error message.
                  die('QUERY FAILED'.mysqli_error());
              }
              $row=mysqli_fetch_array($result);
              if(($row["id"] == $regusername))
              {
                  $regquery="insert into usercredentials(id,password) values('$regusername','$regpassword')";
                // mysqli_query(connection,query);
                $regresult=mysqli_query($regconnection,$regquery);
                // Check if query is successfull.
                if ($regresult) {
                    // Used to redirect to other page.
                    header( "Location: index.php" );
                }
                else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Insertion Failed!")';
                    echo '</script>';           
                }
              }
              else
              {
                  echo '<script language="javascript">';
                  echo 'alert("Invalid Aadhar Id!")';
                  echo '</script>';           
              }
          }
      }

      // AUTHORITY LOGIN

      if(isset($_POST['authsubmit']))
      {
          $authusername=$_POST['authusername'];
          $authpassword=$_POST['authpassword'];

          $_SESSION['authusername']=$_POST['authusername'];
          $_SESSION['authpassword']=$_POST['authpassword'];

          //Connect to the SQL database.
          //We do this using the mysqli_connect API
          //$connection=mysqli_connect(server,authname,password,)
          $authconnection=mysqli_connect('localhost','root','','trafficvc');
          //Checking the connection.
          if (!$authconnection) {
              die("Database connection failed.");
          }
          // Check of both the fields are entered.
          if ($authusername=="" || $authpassword=="") {
              echo '<script language="javascript">';
              echo 'alert("Id or Password field not set.")';
              echo '</script>';
          }
          else
          {

              // To prevent SQL Injection:
              // mysqli_real_escape_string(connection_name,parameter_name);
              // This function is used to escape characters like ',() etc. and gives cleaned code which is then assigned to the variable on the left.
              $authusername=mysqli_real_escape_string($authconnection,$authusername);
              $authpassword=mysqli_real_escape_string($authconnection,$authpassword);

              $authquery="select * from authoritycredentials where id='$authusername' and password='$authpassword'";
              // mysqli_query(connection,query);
              $authresult=mysqli_query($authconnection,$authquery);
              // Check if query is successfull.
              if (!$authresult) {
                  // To die means to want all commands to stop and display the error message.
                  die('QUERY FAILED'.mysqli_error());
              }
              $authrow=mysqli_fetch_array($authresult);
              if(($authrow["id"] == $authusername) && ($authrow["password"] == $authpassword))
              {
                  // Used to redirect to other page.
                  header( "Location: welcome_auth_view.php" );
              }
              else
              {
                  echo '<script language="javascript">';
                  echo 'alert("Incorrect id or password! Please try again.")';
                  echo '</script>';           
              }
          }
      }
    ?>  
  </body>
</html>

 