<?php
$dir='uploads/';
$files=scandir($dir, 0);
for($i=2;$i<count($files);$i++){
	$path='uploads/'.$files[$i];
	
	echo "<a href=".$path."</a>".$files[$i]."</a><br/>";
}
?>