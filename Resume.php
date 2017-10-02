<!DOCTYPE html>
<html>
<head>
<title>Evans Kiptarus Kibet</title>
<link rel="stylesheet" type="text/css" href="css/Index-style.css"/>
<link rel="stylesheet" type="text/css" href="css/resume-style.css"/>
<script type="text/javascript">

function getAcademic(){
	var academic=document.getElementById("div_change_contents");
	academic.innerHTML="<?php include 'academicQualification.php'; ?>";
}

</script>
</head>
<body>
<?php include ("headerPage.php"); ?>
<div id="cv">
<div id="cv_menu">
<input type="button" name="radiobutton" value="Personal Information" onclick="getInformation()"/>
<input type="button" name="radiobutton" value="Academic" onclick=" return getAcademic()"/>
<input type="button" name="radiobutton" value="Skills" onclick="changeDiv()"/>
<input type="button" name="radiobutton" value="Experience" onclick="changeDivContent()"/>
<input type="button" name="radiobutton" value="Referees" onclick="changeDivContent()"/>
</div>
<div id="div_change_contents">
<?php
include 'personal_Information.php';
?>




</div>
</div>
<?php include 'footerPage.php'; ?>
</body>
</html>