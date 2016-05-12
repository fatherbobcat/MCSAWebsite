<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="style.css"/>
<head>
<script type="text/javascript" src="scripts/jquery.js"></script> 
<title>
	Mainland Chinese Student Association
</title>
<body>
	<div id="header">&nbsp
	</div>
	<div id="container">
		<div id="nav">
			<div id="nav_space">&nbsp
			</div>
			
			<div id="navlinks">
				<a href="index.php"><img id="navh" onmouseover="highlight();" src="theme/home.jpg" alt="home"/></a>
				<a href="about.php"><img id="nava" src="theme/about.jpg" alt="about"/></a>
				<a href="events.php"><img id="navev" src="theme/events.jpg" alt="events"/></a>
				<a href="media.php"><img id="navm" src="theme/media.jpg" alt="media"/></a>
				<a href="eboard.php"><img id="naveb" src="theme/eboard.jpg" alt="eboard"/></a>
				<a href="contact.php"><img id="navc" src="theme/contact.jpg" alt="contact"/></a>
			</div>
			<?php
			echo("
			<script type=\"text/javascript\">
			function highlight(){
			$(\"#navh\").remove();
			$(\"#nav\").append('<img id=\"navh\" onmouseout=\"revert();\" src=\"theme/home1.jpg\" alt=\"home\"/>')
			}
			function revert(){
			$(\"#navh\").remove();
			$(\"#nav\").append('<img id=\"navh\" onmouseover=\"highlight();\" src=\"theme/home.jpg\" alt=\"home\"/>')
			}
			</script>
			</div>
			");
			?>