<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Danny's Personal Website</title>
	<link rel="stylesheet" type="text/css" href="dannyglobal.css">
	<link rel="stylesheet" href="danny.css">
</head>
<body onresize='menuswitch()'>
<div id="bg-fixed-layered"></div>
<?php 
$projectscolor='';
$photocolor='';
$homecolor='style="color:#838b91;"';
$messagefront = 'Software Developer';
$messagebehind = 'Who I am. . .';
require 'landingpage.php';
?>
<div id='webpage'>
<div id='content-container'>
	<div id='content'>
	<div style="padding-top:0;">
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
		<p><a href="http://www.smartRG.com" target="_blank">SmartRG Inc.</a> - Software Engineering Intern, Winter 2017</p>
		<p><a href="http://www.sbhacks.com" target="_blank">SB Hacks III</a> - Developer Team Member, Oct 2016 - Present</p>
	</div>
	<hr/>
	<div id='projects'>
		<h1 id = 'projh1' style='padding-bottom: 5%;'>Project Overview</h1>
		<div class='proj-container-container'>
		<a href='projects.php#sitter' class='content-proj-container' target="_blank"><p>EasySitter</p>
		<ul><li><span>Y.</span>2015</li><li><span>A.</span>WeHack</li><li><span>T.</span>Hackathon Project</li></ul>
		</a></div><!--
		--><div class='proj-container-container'><a href='projects.php#selfie' class='content-proj-container' target="_blank"><p>Hashtag Selfie</p>
		<ul><li><span>Y.</span>2015</li><li><span>A.</span>OC Hacks i3</li><li><span>T.</span>Hackathon Project</li></ul>
		</a></div><!--
		--><div class='proj-container-container'><a href='projects.php#gomoku' class='content-proj-container' target="_blank"><p>Gomoku</p>
		<ul><li><span>Y.</span>2015</li><li><span>A.</span>AP CSA</li><li><span>T.</span>School Project</li></ul>
		</a></div>
	</div>
	<hr/>
	<div id='photos' style="padding-bottom: 5%;">
		<h1>Photography</h1>
		<div id='photos-img-wrapper' style=''><img id='gallery-img' style="width: 100%;" src="pics/index/d3300.jpg"></img>
		<div id='gallery-wrapper' style=""><a id='gallery-button' href="photo.php" target="_blank">Gallery</a></div>
		</div>
		
	</div>
</div>
</div>
</div><!--loaded-->
</body>
<script src = 'web.js'></script>
<script src = 'jquery-3.1.0.min.js'></script>
<script src = 'actions.js'></script>
</html>