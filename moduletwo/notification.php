
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
            <li class="active"><a href="profile.php">Home</a></li>
			<li class="active"><a href="create.php">Create a Event</a></li>
			<li class="active"><a href="notification.php">Check Notifications</a></li>
			<li class="active"><a href="signout.php">Sign Out</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
   
    <div class="container">
      <div style="padding:30px;margin-top:50px;text-align:center;">
      <div class="starter-template">
	   <label>NOTIFICATIONS</label>
	   <br>
	   <br>
       <?php
	    include "global.php";
	    $query="SELECT *  FROM  event ORDER BY id DESC";
		$query_run=mysql_query($query);		
		while($result=mysql_fetch_assoc($query_run)){	
       $id=$result['uid'];		
	   $query=mysql_query("SELECT * FROM user_details WHERE id='$id'");
	   $result1=mysql_fetch_assoc($query);
	   
	   echo '<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">'.$result['name'].' ( '.$result['date'].' )</h3>
      </div>
      <div class="panel-body">
        '.$result['details'].'<hr><span style="color:#428bca;">'.$result1['email'].'</span>
      </div>
    </div>
	   ';
	   }
	   ?>
	   
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
