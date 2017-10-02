<?php
session_start();
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function logoutUser(){
	document.write("<a href='Login-user.php'>Logout+"</a>");
}
</script>
<meta charset="UTF-8"/>
<!--<link rel="stylesheet" href="css/login-style.css" type="text/css">-->
<link rel="stylesheet" href="css/Index-style.css" type="text/css">
<title>Login registered users</title>
<style type="text/css">

</style>
</head>
<body class="body">
<?php include ("headerPage.php"); ?>
<div class="message">
<br>
<br>
<strong>Compose your Message</strong><span id="logout_button"><button onclick="logoutUser()">Logout</button><hr/>
<br><br>
<form method="POST" action="MessageSender.php">
<input type="text" size="30" name="subject" placeholder="Your subject here..."/>
<br><br>

<input type="email" size="30" name="email" placeholder="Email here..."/>
<br><br>

<textarea rows="4" cols="50" name="Message" placeholder="Your message here...">


</textarea><br><br>
<input type="button" size="20" name="btn" value="Submit"/>
<br>
</form>
</div>
<?php include 'footerPage.php'; ?>
</body>
</html>