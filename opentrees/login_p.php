<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Login_check.php</title>

  
</head><body>
<?php
	if($_POST['txtusername']=="Admin" &&  $_POST['txtpassword']=="Admin123")
	{
		header('location:verify1.php');
		}
		else{
			header('location:home.php');
			}
	

?>
<br>

<br>
</body></html>