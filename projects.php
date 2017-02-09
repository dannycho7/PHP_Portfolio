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
    <?php
      include 'modules/projinfoXML.php';
      foreach($projInfo->project as $proj){
        echo "<div id = '".$proj['name']."' class='proj-content'>
                <div class='proj-preview'>
                  <img src='pics/project/".$proj['name'].".png' />
                </div>
                <h1>".$proj['name']."</h1>
                <div class='description'>
                  <div class = 'block'>
                    <span>".$proj['purpose']."</span>
                    <span>".$proj['year']."</span>
                  </div>
                  <div class = 'block'>
                    <span>".$proj->technologies."</span>
                  </div>
                  <div class = 'block'>
                    <span>".$proj['accomplishment']."</span>
                  </div>
                </div>
                <article>".$proj->description."</article>
              </div>";
      }
    ?>
  </div><!--loaded-->
</div>
</body>
<script src = 'js/jquery-3.1.0.min.js'></script>
<script src = 'js/web.js'></script>
<script src = 'js/index.js'></script>
<script src = 'js/photo.js'></script>
<script type="text/javascript" src="js/projects.js"></script>
</html>