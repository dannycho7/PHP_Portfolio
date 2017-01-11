<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <title>Projects | Danny Cho</title>
  <link rel="stylesheet" type="text/css" href="dannyglobal.css">
  <link rel="stylesheet" type="text/css" href="projects.css">
  </head>
<body onresize='menuswitch()'>
<?php 
$projectscolor='style="color:#838b91;"';
$photocolor='';
$homecolor='';
$messagefront = 'Project Involvement';
$messagebehind = 'What I do. . .';
require 'landingpage.php';
?>
<div id='webpage'>
<div class='content-container' style="padding:10% 25%; width:50%;">
  <div class='content'>
    <img src="pics/project/work-icon.png" style="height:100px; width:auto;box-shadow:none;">
    <h2>Project Overview</h2>
    <p style="color:#736D64;">I love creating things. These are the projects I've worked on so far. The languages I used to create them were PHP/HTML/CSS/Javascript/Java.</p>
  </div>
</div>
<div class='content-container' style="background-color:#E887DB;">
  <div class='content'>
      <div id = 'slide-container-1' class='slide-container'>
        <img id='sitter' class='slide initial-slide' src='pics/project/easysitter.png'></img>
        <img class='slide slide-a' src='pics/project/easysitter1.png'></img>
        <img class='slide slide-a' src="pics/project/easysitter2.png"></img>
        <img class='arrow' onclick="slider(1,1)" src='pics/project/arrow-right.png' style="right:-5%;"></img>
        <img class='arrow' onclick="slider(-1,1)" src='pics/project/arrow-left.png' style="left:-5%;"></img>
      </div><!--slide-container-1-->
        <h1>EasySitter</h1>
        <div class='description'><h6>Y. 2015</h6><h6>A. WeHack</h6><h6>T. Hackathon Project</h6><br/><h6>HTML/CSS/Javascript/Blueberry/Google API</h6><br/>
        <h6><strong>Placed: 1st</strong></h6></div>
        <p>EasySitter is a project and idea I worked on during the WeHack/Southeast Cities Hackathon with my teammate Esmeralda Nava. EasySitter connects local babysitters with parents at any time. Babysitters can simply check a box saying that they're ready to provide service(like uber). This site runs on a credit based system, so that parents don't have to immediately pay if they don't have the money at the moment or are willing to babysit themselves at another time to make up the credits. I built the site with html/css/javascript to be displayed for the hackathon. </p>
  </div>
</div>
<div class='content-container' style="background-color:rgb(25,25,25);">
  <div class='content'>
  <div id='slide-container-2' class='slide-container'>
  <img id='selfie' class='slide initial-slide' src="pics/project/hashtagselfie.png"></img>
  <img class='slide slide-a' src='pics/project/hashtagselfie1.png'></img>
        <img class='slide slide-a' src="pics/project/hashtagselfie2.png"></img>
  <img class='arrow' onclick="slider(1,2)" src='pics/project/arrow-right.png' style="right:-5%;"></img>
        <img class='arrow' onclick="slider(-1,2)" src='pics/project/arrow-left.png' style="left:-5%;"></img>
  </div><!--slide-container-2-->
  <h1>Hashtag Selfie</h1>
  <div class='description'><h6>Y. 2015</h6><h6>A. OC Hacks i3</h6><h6>T. Hackathon Project</h6><br/><h6>Java/Java GUI</h6><br/>
  <h6><strong>Placed: 2nd</strong></h6></div>
  <p>Hashtag Selfie is a project that aimed to develop a photo editing platform with more freedom than the popular options such as Instagram. Alongside my teammates Kevin Lin, Edward Kim, and Eunice Huang, I developed the hex color editor portion for the photo editor.</p>
  </div>
</div>
<div class='content-container' style="background-color:rgb(125,204,147);">
  <div class='content'>
  <div id='slide-container-3' class='slide-container'>
  <img id='gomoku' class ='slide initial-slide' src="pics/project/gomoku.png" style="width:50%;"></img>
  <img class ='slide slide-a' src="pics/project/gomoku1.png" style="width:50%;"></img>
  <img class ='slide slide-a' src="pics/project/gomoku2.png"></img>
  <img class='arrow' onclick="slider(1,3)" src='pics/project/arrow-right.png' style="right:-5%;"></img>
  <img class='arrow' onclick="slider(-1,3)" src='pics/project/arrow-left.png' style="left:-5%;"></img>
  </div>
  <h1>Gomoku</h1>
  <div class='description'><h6>Y. 2015</h6><h6>A. AP Computer Science A</h6><h6>T. School Project</h6><br/><h6>Java/Greenfoot</h6><br/></div>
  <p>Gomoku is a game I developed alongside my friend, Mandy Tsai. We used Greenfoot and Java to code the algorithms necessary to create not only the game, but also the AI system that alternated between Easy, Medium, and Hard. </p>
  </div>
</div>
</div><!--loaded-->
</body>
<script src='webapp.js'></script>
<script src='web.js'></script>
</html>