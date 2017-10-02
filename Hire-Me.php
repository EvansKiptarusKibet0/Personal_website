<?php
session_start();
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<!--<link rel="stylesheet" href="css/login-style.css" type="text/css">-->
<link rel="stylesheet" href="css/Index-style.css" type="text/css">
<title>Login registered users</title>
<style type="text/css">
.message{
	width: 700px;
	background-color: white;
	height: 400px;
	margin: 0px auto;
	padding-top: 10px;
	padding-left: 10px;
	
}
</style>
</head>
<body class="body">
<?php include ("headerPage.php"); ?>
<div class="message">
<br>
<br>
Send your message here...
<br><br>
<form method="post" action="#">
<input type="text" size="30" name="nm" placeholder="username"/>
<br><br>

<input type="email" size="30" name="email" placeholder="Email here..."/>
<br><br>

<textarea rows="4" cols="50">


</textarea><br><br>
<input type="button" size="20" name="btn" value="Submit"/>
<br>




</form>
</div>
<?php include 'footerPage.php'; ?>
</body>
</html>