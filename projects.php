<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <title>Danny's Personal Website</title>
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  </head>
<body onresize='menuswitch()'>
<?php 
$projectscolor='style="color:#838b91;"';
$photocolor='';
$homecolor='';
require_once 'modules/header.php'
?>
<div id='webpage'>
<?php
$messagefront = 'Project Involvement';
$messagebehind = 'What I do. . .';
require_once 'modules/landingpage.php';
?>
  <div id='content-container'>
    <div class='proj-content proj-overview'>
      <img src="pics/project/work-icon.png">
      <h1>Project Overview</h1>
      <p>Here are a few of the projects that I have worked on. If you would like to collaborate, don't hesitate to reach out!</p>
    </div>
    <div class='proj-content'>
        <div class='proj-preview'>
          <img src='pics/project/easysitter.png'></img>
          <!--<img src='pics/project/easysitter1.png'></img>
          <img src="pics/project/easysitter2.png"></img>-->
        </div><!---container-1-->
          <h1>EasySitter</h1>
          <div class='description'>
            <div class="block">
              <span>Y. 2015</span>
              <span>A. WeHack</span>
              <span>T. Hackathon Project</span>
            </div>
            <div class="block">
              <span>HTML/CSS/Javascript/Blueberry/Google API</span>
            </div>
            <div class="block">
              <span>Placed: 1st</span>
            </div>
          </div>
          <article>EasySitter is a project and idea I worked on during the WeHack/Southeast Cities Hackathon with my teammate Esmeralda Nava. EasySitter connects local babysitters with parents at any time. Babysitters can simply check a box saying that they're ready to provide service (like uber). This site runs on a credit based system, so that parents don't have to immediately pay if they don't have the money at the moment or are willing to babysit themselves at another time to make up the credits. I built the site with html/css/javascript to be displayed for the hackathon.</article>
    </div>
    <div class='proj-content'>
    <div class='proj-preview'>
      <img src="pics/project/hashtagselfie.png"></img>
      <!--<img src='pics/project/hashtagselfie1.png'></img>
      <img src="pics/project/hashtagselfie2.png"></img>-->
    </div><!---container-2-->
    <h1>Hashtag Selfie</h1>
    <div class='description'>
      <div class="block">
        <span>Y. 2015</span>
        <span>A. OC Hacks i3</span>
        <span>T. Hackathon Project</span>
      </div>
      <div class="block">
        <span>Java/Java GUI</span>
      </div>
      <div class="block">
        <span>Placed: 2nd</span>
      </div>
    </div>
    <article>Hashtag Selfie is a project that aimed to develop a photo editing platform with more freedom than the popular options such as Instagram. Alongside my teammates Kevin Lin, Edward Kim, and Eunice Huang, I developed the hex color editor portion for the photo editor.</article>
    </div>
    <div class='proj-content'>
    <div class='proj-preview'>
      <img src="pics/project/gomoku.png" style="width:50%;"></img>
      <!--<img src="pics/project/gomoku1.png" style="width:50%;"></img>
      <img src="pics/project/gomoku2.png"></img>-->
    </div>
    <h1>Gomoku</h1>
    <div class='description'>
      <div class="block">
        <span>Y. 2015</span>
        <span>A. AP Computer Science A</span>
        <span>T. School Project</span>
      </div>
      <div class="block">
        <span>Java/Greenfoot</span>
      </div>
    </div>
    <article>Gomoku is a game I developed alongside my friend, Mandy Tsai. We used Greenfoot and Java to code the algorithms necessary to create not only the game, but also the AI system that alternated between Easy, Medium, and Hard. </article>
    </div>
  </div><!--loaded-->
</div>
</body>
<script src = 'js/web.js'></script>
<script src = 'js/jquery-3.1.0.min.js'></script>
<script src = 'js/index.js'></script>
<script src = 'js/photo.js'></script>
<script type="text/javascript" src="js/projects.js"></script>
</html>