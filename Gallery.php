<!DOCTYPE html>
<html>
<head>
<title>Gallery of photos</title>
<style type="text/css">
div#gHolder{
	width: 600px;
	height: 500px;
	margin: 0 auto;
	background-color: silver;
	padding: 10px;
}
div#theNigImage
{
	width: 600px;
	height: 400px;
	background-color: white;
	}
nav#thumnnailsHilder{
	width: 590px;
	height: 100px;
	background-color: white;
	margin: 5px auto;
	padding: 5px;
}
div#theNigImage > img{
	width: 600px;
	height: 400px;
}
div#thumnnailsHilder > img{
	margin-left: 2px;
	width: 118px;
	height: 90px;
	display: block;
	float: left;
	margin: 2px auto;
	transition: border-radius 0.3s linear 0s;
}
div#thumnnailsHilder > img:hover{
	border-radius: 100px;
	cursor: pointer;
}
</style>
<meta charset="UTF-8"/>
</head>
<body>
<div id="gHolder">
<div id="theNigImage">
<img src="images/1.jpg" id="bigImage"/>
</div>
<div id="thumnnailsHilder">
<img src="images/1.jpg"/>
<img src="images/2.jpg"/>
<img src="images/3.jpg"/>
<img src="images/4.jpg"/>
<img src="images/evans.jpg"/>
</div>
</div>
</body>
</html>