<!DOCTYPE html>
<html>
<head>
<title>Evans Kiptarus Kibet</title>
<link rel="stylesheet" type="text/css" href="css/Index-style.css"/>
<link rel="stylesheet" type="text/css" href="css/Portfolio-style.css"/>
</head>
<body>
<?php include ("headerPage.php"); ?>

<div id="outer" align="center"><br><br>
<p>My portfolio</p><hr>

<div id="portfolio">
<h3>Choose the project to upload here</h3>
<br>

<?php
$fileName=$_FILES['file']['name'];
$temp_name=$_FILES['file']['tmp_name'];

if(isset($fileName)){
	if(!empty($fileName)){
		$location='uploads/';
		if(move_uploaded_file($temp_name,$location.$fileName)){
			echo '<p class="file">File uploaded successfully</p>';
		}else{
			echo 'There was an error while uploading';
		}
		
		
	}else{
		echo '<p class="file">Choose a file to upload</p>';
	}
}
?>

<form method="POST" action="Portfolio.php" enctype="multipart/form-data">
<input type="file" name="file" placeholder="File_path here.."/>
<input type="submit" value="Choose"name="btn"/>
</form>

<br/>
</div>
<div id="portfolio1">
<h4>Contact us:</h4>
<ul>
<li><a href="https://www.facebook.com/"ivan.evans/>Facebook</a></li>
</ul>
</div>
</div>
<?php include 'footerPage.php'; ?>
</body>
</html>