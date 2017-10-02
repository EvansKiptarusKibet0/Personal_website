<!DOCTYPE html>
<html>
<head>
<title>Evans Kiptarus Kibet</title>
<link rel="stylesheet" type="text/css" href="css/Index-style.css"/>
<link rel="stylesheet" type="text/css" href="css/forgetPassword-style.css"/>
</head> 
<body>

<?php include('headerPage.php'); ?>
<div class="forgot-password">
<br>
<br><br>
<p>Forgot password?</p>
<form method="post" action="forgetPassword.php">
<label for="forgot_pass">Email address</label>
<input type="text" name="email" placeholder="Enter your email" required/><br><br>
<button class="forget_button"><a href="Login-user.php">Submit</a></button></td
</form>
</table>
<div id="back_button_div">

<p><a class="back_btn_forget"href="Login-user.php">Back Login</a></p>

</div>
</div>
<?php include ("footerPage.php"); ?>
</body>
</html>