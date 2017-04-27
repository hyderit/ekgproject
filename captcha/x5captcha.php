<?php
include("../res/x5engine.php");
$nameList = array("xuz","hlr","u3e","lvc","2xe","f3u","72l","8w2","f8x","vtt");
$charList = array("P","E","4","2","8","T","5","A","H","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
