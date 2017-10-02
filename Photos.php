<!DOCTYPE html>
<html>
<head>
<title>Photo Gallery</title>
<link rel="stylesheet" href="css/Index-style.css" type="text/css"/>
<link rel="stylesheet" href="css/Photos-style.css" type="text/css"/>

</head>
<body>
<?php include ("headerPage.php"); ?>
<div id="gallery">
<table align="center">
<tr>
<th colspan="4"><em>My Gallery</em></th>
</tr>
<tr>
<td colspan="4">Click on thumb to view the image</td>
</tr>
<tr>
<td><a href="Images/1.jpg" align="center"><img src="Images/1.jpg"></a></td>
<td><a href="Images/2.jpg" align="center"><img src="Images/2.jpg"></a></td>
<td><a href="Images/3.jpg" align="center"><img src="Images/3.jpg"></a></td>
<td><a href="Images/4.jpg" align="center"><img src="Images/4.jpg"></a></td>
</tr>

<tr>
<td><img src="Images/1.jpg"></td>
<td><img src="Images/2.jpg"></td>
<td><img src="Images/3.jpg"></td>
<td><img src="Images/4.jpg"></td>
</tr>
</table>
</div>
<?php include ("footerPage.php"); ?>
</body>
</html>