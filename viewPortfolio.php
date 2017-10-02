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
<h3><u><i>Screenshot of projects done</i></u></h3>

<?php
$dir='uploads/';
$files=scandir($dir, 0);
for($i=2;$i<count($files);$i++){
	$path='uploads/'.$files[$i];
	
	echo '<a href='.$path.'>'.$files[$i].'</a><br/>';
}
?>
<hr/>
<div class="link_github">
<p>Click the <a href="https://github.com/EvansKiptarusKibet0/">link</a> to access source code of;</p>
<ul>
<li>Desktop Java Projects</li>
<li>Web applications java projects</li>
<li>Web-based projects</li>
<li>Other projects</li>
</ul>
</div>
</div>

<div id="portfolio1">
<h4>Contact us:</h4>
<ul>
<li class="contact-me"><a href="https://www.facebook.com/"ivan.evans/>Facebook</a></li>
<li class="contact-me"><a href="https://www.whatsup.com?+245703587475">Call Me</a></li>
<li class="contact-me"><a href="mailTo:evanskibet114@gmail.com">Email me</a></li>
<li class="contact-me"><a href="Login-user.php">Send message</a></li>
</ul>
</div>
</div>
<?php include 'footerPage.php'; ?>
</body>
</html>