<?php
include "global.php";

if(isset($_POST['submit']))
{
  if(!empty($_POST['email'])||isset($_POST['email']) && (!empty($_POST['pass'])||isset($_POST['pass'])))
  {
    $email=$_POST['email'];
	$pass=$_POST['pass'];	
	$passhash = md5($pass);
	$query="SELECT id FROM user_details WHERE email='$email' AND pass='$passhash'";
	$query_run = mysql_query($query);
	$row = mysql_num_rows($query_run);
	if($row == 1){
	$result = mysql_fetch_assoc($query_run);
	$id = $result['id'];
	$_SESSION['id'] = $id;
	header("location: profile.php");
	echo $id;
  }
  else 
  {
	echo 'USERNAME and PASSWORD do not match';
  }
  }
  else {
  echo 'Enter All Fields';
  }
  }
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Notify</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
   
    <div class="container">
      <div style="padding:30px;margin-top:50px;">
      <div class="starter-template">
       <form action="signin.php" method="POST">			
			<input type="email" class="form-control" name="email" placeholder="Enter Email"> <br>
			<input type="password" class="form-control" name="pass" placeholder="Enter password"> <br>			
			<input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-block">
		
		</form>
	   </div>
	  </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
