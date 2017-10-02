<?php

$from=$_POST['email'];
$to="evanskibet114@gmail.com";
$subject=$_POST['subject'];
$message=$_POST['Message'];

mail($to,$subject,$message, "From:".$from);

Print "message send successfully";



?>