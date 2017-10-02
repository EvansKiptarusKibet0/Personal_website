<?php
session_start();
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/login-style.css" type="text/css">
<link rel="stylesheet" href="css/Index-style.css" type="text/css">
<title>Login registered users</title>
</head>
<body class="body">
<?php include ("headerPage.php"); ?>
<br/>
<div class="container">
<img src="images/login1.PNG"/>
<form action="db_login.php" method="POST">

<div class="form-input">
<input type="text" name="username" placeholder="username...." id="user" required/>
</div>

<div class="form-input">
<input type="password" name="pass0"/ placeholder="password..." id="pass" required/>
</div>
<input type="submit" name="submit" value="LOGIN" class="btn-login"/>


</form>
<br>
<a href="forgetPassword.php">Forgot Password?</a><br/>
<p>Not Registered? <a href="Registration-Form.php">Create an Account</a></p>
</div>
<?php include 'footerPage.php'; ?>
</body>
</html>