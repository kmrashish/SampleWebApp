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

<?php
include 'global.php';
$id=$_SESSION['id']=8;
@$name=$_FILES['file']['name'];
@$temp_name=$_FILES['file']['tmp_name'];
if(isset($name))
{
  if(!empty($name))
  {
    $location="uploaded/";
	if(move_uploaded_file($temp_name,$location.$name)){
	   $path=$location.$name;
	   $query="UPDATE usrvoice SET path='$path' WHERE usid='$id'";
	   mysql_query($query);
	}
  }else{
    echo 'Please Choose a file';
  }

}

?>

    <div class="row" style="margin-top:50px;">
	   <div style="padding:30px;text-align:center;">
<form action="upload.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input class="form-control" type="file" name="file" id="file"><br>
<input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
</form>
</div>
  </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
