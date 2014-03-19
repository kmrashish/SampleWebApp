<?php

include "global.php";
if(isset($_POST['submit']))
{
	if(!empty($_POST['feedback'])&&isset($_POST['feedback']))
	{
		$feedback=$_POST['feedback'];
		$devmail="bruteforce@iic.ac.in";
		$sub = "Feedback";
		mail($devmail, $sub, $feedback); 
	}
	else { echo "Enter Feedback"; }
}

?>

<html>
<body>
<form action="contact.php" method="POST">
<p> Provide us with your valuable feedback </p> <br>
<input type="text" name="feedback" required>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>