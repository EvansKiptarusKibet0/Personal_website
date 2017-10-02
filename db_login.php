<?php
include 'dbh.php';

$user=$_POST['username'];
$password=$_POST['pass0'];
if($user=="admin"&&$password=="evans@2016"){
	header("Location: Portfolio.php");
}else
{	
$sql= "SELECT * from register_users WHERE username='$user' AND password='$password'";

$result=$conn->query($sql);

if(!$row=$result->fetch_assoc()){
	echo "Wrong username or passwork!!";
include 'Login-user.php';

}
else{
	$_SESSION['id_session']=$row['id'];
	include 'Login-user.php';
	header("Location: Message-user.php");
}
}
?>