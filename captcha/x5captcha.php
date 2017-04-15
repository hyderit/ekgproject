<?php
include("../res/x5engine.php");
$nameList = array("nhs","6g7","j8z","ape","6fk","6v4","slk","m4r","6hl","vvv");
$charList = array("N","V","A","M","K","G","4","5","L","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
