<!DOCTYPE hmtl>
<html>
<head>
<meta charset="UTF-8"/>
<title>User Registration</title>
<link rel="stylesheet" href="css/Index-style.css" type="text/css"> 
<style type="text/css">
table tr td a:hover{
	color: coral;
	font-weight: bold;
}
</style>

<script type="text/javascript">

function checkField(){
var y=document.getElementById("pass");
var x=document.getElementById("pass1");
var first=document.getElementById("fname");
var last=document.getElementById("lname");
var user=document.getElementById("uname");
var em=document.getElementById("email");

if(y.value==x.value){
	if(y.value!=""&&x.value!=""&&first.value!=""&&last.value!=""&&user.value!=""&&em.value!=""){
		return true;
		
	}
	alert("Fields cannot be null");
	return false;
}
alert("passwords should be same")
return false;
}

</script>
</head>
<body>
<?php include ("headerPage.php"); ?>
<div id="regUser">
<h3>Create Your Account</h3>
<form name="form1" method="POST" action="dbc.php" onsubmit="return checkField()">
<!--Create the session-->
<div class="alert-error">
<?=$_SESSION['message']?>
</div>
<table height="330px">
<tr>
<td><label class="labelColor">First name:</label><td><input type="text" id="fname" name="firstname" placeholder="Firstname"/></td>
</tr>

<tr>
<td><label class="labelColor">Last name:</label><td><input type="text" id="lname" name="lastname" placeholder="Lasttname"/></td>
</tr>

<tr>
<td><label class="labelColor">Username:</label><td><input type="text" id="uname" name="username" placeholder="Username"/></td>
</tr>

<tr>
<td><label class="labelColor">Email ID:</label><td><input type="email" id="email" name="email" placeholder="example@gmail.com"/></td>
</tr>

<tr>
<td><label class="labelColor">Password:</label><td><input type="password" id="pass" name="pass0" placeholder="**********"/></td>
</tr>

<tr>
<td><label class="labelColor">Confirm Password:</label><td><input type="password" id="pass1" name="confirm_password" placeholder="**********"/></td>
</tr>

<tr>
<td><input class="btnBk" type="submit" id="btn" name="submit" value="Register"/><td></td>
</tr>
<tr>
<td>----------------------------------------</td><td>--------------------------------</td>
</tr>
<tr>
<td><h4>Already have an account?</h4></td><td><a href="Login-user.php">Login here</a></td>
</tr>
</table>
</form>
</div>

<script type="text/javascript">
function getLogin(){
	document.write()
}

</script>
<?php include ("footerPage.php"); ?>
</body>
</html>