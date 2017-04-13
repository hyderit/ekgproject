<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Search - EKG Project</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Hayder Hamandi" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.1.16 - www.websitex5.com" />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://wsuekgteam.github.com/imsearch.php" />
		<meta property="og:title" content="Search" />
		<meta property="og:site_name" content="EKG Project" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-1-16" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-0-1-16-636276237308936040" media="screen" />
		<script type="text/javascript" src="res/jquery.js?13-0-1-16"></script>
		<script type="text/javascript" src="res/x5engine.js?13-0-1-16" data-files-version="13-0-1-16"></script>
		
		
		
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
		</script>
		<link rel="icon" href="favicon.ico?13-0-1-16-636276237308936040" type="image/vnd.microsoft.icon" />
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Search - EKG Project</h1>
				<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_07_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_7" class="" > <div id="imHeader_imCellStyleGraphics_7"></div><div id="imHeader_imCellStyle_7" ><div id="imHeader_imObjectTitle_07"><div id ="imHeader_imObjectTitle_07_text">EKG Self Diagnosis System </div > </div></div></div></div><div id="imHeader_imObjectImage_08_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_8" class="" > <div id="imHeader_imCellStyleGraphics_8"></div><div id="imHeader_imCellStyle_8" ><img id="imHeader_imObjectImage_08" src="images/made-in-the-d.jpg" title="" alt="" /></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Home Page</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="products-and-services.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Products and Services</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode4" class=" imPage">
						<a href="about-us.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">About us</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode5" class=" imPage">
						<a href="contact-us.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Contact us</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Search results</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"><div id="imFooter_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><img id="imFooter_imObjectImage_01" src="images/white_no.circle_phone.png" title="" alt="" /></div></div></div><div id="imFooter_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_2" class="" > <div id="imFooter_imCellStyleGraphics_2"></div><div id="imFooter_imCellStyle_2" ><img id="imFooter_imObjectImage_02" src="images/white_no.circle_mail.png" title="" alt="" /></div></div></div><div id="imFooter_imObjectImage_03_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_3" class="" > <div id="imFooter_imCellStyleGraphics_3"></div><div id="imFooter_imCellStyle_3" ><img id="imFooter_imObjectImage_03" src="images/white_no.circle_position.png" title="" alt="" /></div></div></div><div id="imFooter_imTextObject_04_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_4" class="" > <div id="imFooter_imCellStyleGraphics_4"></div><div id="imFooter_imCellStyle_4" ><div id="imFooter_imTextObject_04">
	<div class="text-tab-content"  id="imFooter_imTextObject_04_tab0" style="">
		<div class="text-inner">
			<div><span class="cf1"><b>5050 Anthony Wayne Drive</b></span></div><div><span class="cf1"><b>Suite 3352</b></span></div><div><span class="cf1"><b>Detroit, MI 48202</b></span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imTextObject_05_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_5" class="" > <div id="imFooter_imCellStyleGraphics_5"></div><div id="imFooter_imCellStyle_5" ><div id="imFooter_imTextObject_05">
	<div class="text-tab-content"  id="imFooter_imTextObject_05_tab0" style="">
		<div class="text-inner">
			<div><b><span class="cf1">+1 (313) 633-3385</span></b></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imTextObject_06_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_6" class="" > <div id="imFooter_imCellStyleGraphics_6"></div><div id="imFooter_imCellStyle_6" ><div id="imFooter_imTextObject_06">
	<div class="text-tab-content"  id="imFooter_imTextObject_06_tab0" style="">
		<div class="text-inner">
			<div><span class="fs10"><b><span class="cf1">hayder@wayne.edu</span></b></span><br></div>
		</div>
	</div>

</div>
</div></div></div></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Remain on this page">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
