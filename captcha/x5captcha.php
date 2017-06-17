<?php
include("../res/x5engine.php");
$nameList = array("rvz","f82","re5","etd","3zj","myc","777","3gk","fxk","e27");
$charList = array("J","F","3","V","5","4","3","V","2","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
