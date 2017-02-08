<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Danny's Personal Website</title>
	<link rel="stylesheet" href="css/theme.css">
</head>
<body onresize='menuswitch()'>
<?php
$projectscolor='';
$photocolor='';
$homecolor='style="color:#838b91;"';
require_once 'modules/header.php'
?>


<div id='webpage'>
<?php 
$messagefront = 'Software Developer';
$messagebehind = 'Who I am. . .';
require_once 'modules/landingpage.php';
?>
<div id='content-container'>
	<div id='content'>
	<div>
	<article><div id="social">
	  <div><hr/></div>
	  <a href="https://www.facebook.com/dannychooo" target="_blank">
	  <img src="pics/social/facebook.png"></img></a>  
	  <a href="https://www.instagram.com/dannycho7/" target="_blank">
	    <img src="pics/social/instagram.png"></img></a>
	  <a href="https://www.linkedin.com/in/danny-cho-32a553ab?trk=nav_responsive_tab_profile_pic" target="_blank">
	    <img src="pics/social/linkedin.png"></img></a>  
	  <a href="https://www.youtube.com/channel/UCGvCCaII82m9qtqkKDYXI3g" target="_blank">
	    <img src="pics/social/youtube.png"></img></a> 
	  <a href="https://www.github.com/dannycho7" target="_blank">
	  	<img src="pics/social/github.png"></a>  
	  </div>
		<p>I am <strong>Danny Cho</strong>, a self-taught aspiring <strong>web</strong> &amp; <strong>mobile app developer</strong> and <strong>entrepreneur</strong>. I have been <strong>coding</strong> &amp; attending <strong>hackathons</strong> for 2 years. I am a <strong>Computer Science</strong> major at <strong>UC Santa Barbara</strong>. I always look forward to meeting new people and collaborating on <strong>projects</strong>. Feel free to <a href='mailto:dannycho7@gmail.com' target="_blank">contact me</a> for anything! This site was made by Danny Cho with PHP / HTML / CSS / Javascript / Jquery.</p>
	</article>
	</div>
	<hr/>
	<div id="internships">
		<h1>Experience</h1>
		<p><a href="http://www.smartRG.com" target="_blank">SmartRG Inc.</a> - Software Engineering Intern, Fall 2016 &amp; Winter 2017</p>
		<p><a href="http://www.sbhacks.com" target="_blank">SB Hacks III</a> - Developer &amp; Organizer, Fall 2016 - Present</p>
	</div>
	<hr/>
	<div id='projects'>
		<h1 id = 'projh1'>Project Overview</h1>
		<div class='proj-container-container'>
		<a href='projects.php#sitter' class='content-proj-container'><p>EasySitter</p>
		<ul><li><span>Y.</span>2015</li><li><span>A.</span>WeHack</li><li><span>T.</span>Hackathon Project</li></ul>
		</a></div><!--
		--><div class='proj-container-container'><a href='projects.php#selfie' class='content-proj-container'><p>Hashtag Selfie</p>
		<ul><li><span>Y.</span>2015</li><li><span>A.</span>OC Hacks i3</li><li><span>T.</span>Hackathon Project</li></ul>
		</a></div><!--
		--><div class='proj-container-container'><a href='projects.php#gomoku' class='content-proj-container'><p>Gomoku</p>
		<ul><li><span>Y.</span>2015</li><li><span>A.</span>AP CSA</li><li><span>T.</span>School Project</li></ul>
		</a></div>
	</div>
	</div>
</div>
</div>
</div><!--loaded-->

</body>
<script src = 'js/web.js'></script>
<script src = 'js/jquery-3.1.0.min.js'></script>
<script src = 'js/index.js'></script>
<script src = 'js/photo.js'></script>
<script type="text/javascript" src="js/projects.js"></script>
</html>