<?php
include("../res/x5engine.php");
$nameList = array("apm","c5r","88p","fa2","vjy","7wc","rsc","5xa","wdp","6s8");
$charList = array("R","P","8","K","K","R","T","X","G","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
