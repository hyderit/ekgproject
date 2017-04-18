<?php
include("../res/x5engine.php");
$nameList = array("j46","wmj","3rh","7us","s4c","4ca","zve","yku","zla","ctn");
$charList = array("Z","3","5","V","4","K","7","6","T","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
