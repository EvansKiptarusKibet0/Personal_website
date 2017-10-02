<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function changeDivContent(){
	var myDiv=document.getElementById("content");
	myDiv.innerHTML='<?php 
     

    ?>';
}

function changeDivContent1(){
	var secDiv=document.getElementById("content");
	secDiv.innerHTML='Button A is clicked now!!';
}
</script>
<link href="contents-style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="cont">
<p>Choose the option</p>
<input type="button" name="radiobutton" value="About me" onclick="changeDivContent1()" size="30px"/>
<input type="button" name="radiobutton" value="Account" onclick="changeDivContent()"/>
<input type="button" name="radiobutton" value="Resume" onclick="changeDivContent1()" size="30px"/>
<input type="button" name="radiobutton" value="Help" onclick="changeDivContent()"/
<br/>
</div>
<div id="content">
<p>I love this coding</p>
</div>
</body>
</html>