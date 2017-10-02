<?php
//open connection to mysql db
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['passs0'];
$password1=$_POST['confirm_password'];

if($fname==""||$lname==""||$uname==""||$email==""||$password==""||$password1==""){


$dbc=mysql_connect('localhost','root','');

if(!$dbc){
	die('Not connected to the server:'. mysql_error());
}

//select database
$dbc_select=mysql_select_db("game",$dbc); 
 if(!$dbc_select){
	 die('Not connected to the database: '.mysql_error());
 }

 //test the database
 $q="UPDATE game SET email='yyy' WHERE username='evans'";
 
 $result=mysql_query($q);
}or die("Fields cannot be null");
?>