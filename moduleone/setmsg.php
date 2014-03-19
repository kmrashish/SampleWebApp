<?php
include "global.php";

if(isset($_POST['submit'])){
if(!empty($_POST['msg'])||isset($_POST['msg'])){
$msg=$_POST['msg'];

$id=$_SESSION['id'];
$query="INSERT INTO usrmsg VALUES(DEFAULT, '$id', '$msg', NOW())";
$query_run=mysql_query($query);
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
              <li class="active"><a href="profile.php">Home</a></li>
			<li class="active"><a href="emg.php">Emergency</a></li>
			<li class="active"><a href="setmsg.php">Set Message</a></li>
			<li class="active"><a href="senddetails.php">Set Contacts</a></li>			
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </div>
	
	<div class="row" style="margin-top:100px;">
	<div style="padding:50px;padding-top:0px;">
	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">SET DEFAULT MESSAGE</h3>
      </div>
      <div class="panel-body">
        <form method="POST" action="setmsg.php">
		<input class="form-control" type="text" name="msg" placeholder="SET YOUR DEFAULT MSG" />
		<br>
		<input class="form-control btn-success" type="submit" value="UPDATE" name="submit">
		</form>
      </div>
    </div>
	</div>
	</div>
	</div>

	
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
