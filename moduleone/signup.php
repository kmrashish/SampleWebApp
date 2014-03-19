<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>MODULE 1</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
   

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
          <a class="navbar-brand" href="#">FeelSecure</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </div>
	
	<div class="row" style="margin-top:100px;">
	<div style="padding:50px;padding-top:0px;">
	
     
	  <?php
include "global.php";
if(isset($_POST['submit']))
{
  if(!empty($_POST['email'])||isset($_POST['email']) && (!empty($_POST['fname'])||isset($_POST['fname'])) && (!empty($_POST['lname'])||isset($_POST['lname'])) && (!empty($_POST['pass'])||isset($_POST['pass']))&& (!empty($_POST['pass1'])||isset($_POST['pass1'])))
  {
    $email=$_POST['email'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['pass'];
	$pass1=$_POST['pass1'];
	if($pass==$pass1)
	{
	$pass=md5($pass);
	$query="INSERT INTO users VALUES(DEFAULT,'$email','$fname','$lname','$pass')";
	mysql_query($query);
	$query2="SELECT id FROM users WHERE email='$email'";
	$query_run2=mysql_query($query2);
	$result=mysql_fetch_assoc($query_run2);
	$id=$result['id'];
	$query1="INSERT INTO usrvoice VALUES(DEFAULT,'$id',' ')";
	mysql_query($query1);
	
    }
	else
	{
	echo 'PASSWORD MIS-MATCH!';
	}
  }
  else
  {
  echo 'ALL FIELDS REQUIRED!';
  }

}
?>

        <form method="POST" action="signup.php">
		
		<input class="form-control" type="text" name="email" placeholder="Email ID"/><br>
		<input class="form-control" type="text" name="fname" placeholder="First Name"/><br>
		<input class="form-control" type="text" name="lname" placeholder="Last Name"/><br>
		<input class="form-control" type="password" name="pass" placeholder="password"/><br>	
        <input class="form-control" type="password" name="pass1" placeholder="Re-type Password"/><br>			
		<br>
		<input class="form-control btn-success" type="submit" value="REGISTER" name="submit">
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
