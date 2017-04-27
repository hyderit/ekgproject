<?php
include("../res/x5engine.php");
$nameList = array("6a5","r5l","eze","lw6","gnx","t2t","7l6","4ls","548","dxk");
$charList = array("F","W","J","6","D","D","C","X","3","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
