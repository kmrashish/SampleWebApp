<?php
	include 'global.php';
	if(isset($_POST['submit']))
	{
		if((!empty($_POST['email'])||isset($_POST['email']))&& (!empty($_POST['pwd'])||isset($_POST['pwd'])) && (!empty($_POST['pwdagain'])||isset($_POST['pwdagain'])))
		{
			$email = $_POST['email'];
			$query1 = "SELECT * FROM user_details where email='$email'";
			$query1_run = mysql_query($query1);
			$row = mysql_num_rows($query1_run);
			if($row>=1)
			{
				echo "email already exists";
				echo "<a href=\"signup.php\"> Sign Up!! </a>";
			}
			else {
			$pwd = md5($_POST['pwd']);
			$pwdagain = md5($_POST['pwdagain']);
			
			if($pwd==$pwdagain)
			{
				$query = "INSERT INTO user_details VALUES(DEFAULT, '$email', '$pwd') ";
				$query_run = mysql_query($query);
				header("location: signin.php");
			}
			else
			{
				echo 'Passwords do not match';
			}
			}
		}
		else {
		echo 'All fields required';
		
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
		<form action="signup.php" method="POST">			
			<input type="text" class="form-control" name="email" placeholder="Enter Email"> <br>
			<input type="password" class="form-control" name="pwd" placeholder="Enter password"> <br>
			<input type="password" class="form-control" name="pwdagain" placeholder="Re-enter password"><br>
			<input type="submit" class="btn btn-success btn-block" name="submit" value="Sign up">		
		</form>
		<br>
		<a href="signin.php" class="btn btn-primary btn-block">Existing User!</a>
		</div>
		</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>