<?php
session_start();

include 'dbh.php';

$first=$_POST['firstname'];
$last=$_POST['lastname'];
$user=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['pass0'];

$sql= "insert into register_users(firstname,lastname,username,email,
password) values('$first','$last','$user','$email','$password')";

$result=$conn->query($sql);


header("Location: Login-user.php");
?>