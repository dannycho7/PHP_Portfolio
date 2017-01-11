<?php
echo '<div id="navigation" class="gradient">
      <div id="nav-cover">
    <div id = "logo">
        <a href="index">
          <img src="pics/social/logo1.png" href="#" style="width: 97px;height:48px;"></img>
        </a>
        </div>
      <a id="menu-icon" class="navselect" onclick="reveal()">
      <img src="pics/menu-icon.png" id="menuimg"></img> 
      <img src="pics/exit.png" id="exit"></img> 
      </a>
      <div id="container">
        <div id="menubar">
      <ul class="menu-content">
        <li class="linknav"><a href="index" class="navselect" '.$homecolor.'>Home</a></li><!--
        --><li class="linknav"><a href="projects" class="navselect" '.$projectscolor.'>Projects</a></li><!--
        --><li class="linknav"><a href="photo" class="navselect" '.$photocolor.'>Photography</a></li><!--
        <li class="linknav"><a href="pics/Resume_DannyCho.pdf" class="navselect" target="_blank">Resume</a></li>-->
      </ul>
      </div><!--menubar-->
      </div><!--container-->
  </div>
  </div>
<div id="initialpageimg"> 
<div id="fulltextcontainer-top">
  <div id = "fulltext-top">
  <h3>'.$messagebehind.'</h3>
  </div>
  </div>
<div id="initialpage">  
  
  <div id="fulltextcontainer">
  <div id = "fulltext">
  <h3>'.$messagefront.'</h3>
  </div>
  </div>
</div><!--initialpage-->
</div><!--intialpageimg-->';
?>