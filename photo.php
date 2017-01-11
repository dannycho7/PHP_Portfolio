<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <title>Photography | Danny Cho</title>
  <link rel="stylesheet" type="text/css" href="dannyglobal.css">
  <link rel="stylesheet" type="text/css" href="photo.css">
  <link rel="stylesheet" type="text/css" href="photopolaroid.css">
</head>
<body onresize='menuswitch()'>
<?php 
$projectscolor='';
$homecolor='';
$photocolor='style="color:#838b91;"';
$messagefront = 'Photos &amp; Moments';
$messagebehind = 'I see through. . .';
require 'landingpage.php';
?>
<div id='webpage'>
<div id='content'>
<?php 
if($_GET && $_GET["folder"]){
$dirname = 'pics/photography/photos/'.$_GET["folder"].'/';
$imgs = glob($dirname."*");
echo '<div class="photonav"><a class="info">'.$_GET["folder"].'</a><p>Let me know what you think!</p>
<a href="photo.php" class="back-btn"><img src="pics/photography/arrow-back.png" id="photo-album-icon"></a><span>Get back to the Directory</span></div>';
echo '<div id="photo-container">';
foreach($imgs as $imgname){
$imgdescr = $imgname;
$imgdescr = str_replace(".JPG", "", $imgdescr);
$imgdescr = str_replace($dirname,"",$imgdescr);
echo '<img src="'.$imgname.'" title="'.$imgdescr.'">';
}
echo '</div><script>document.body.style.background="white";</script>';//changes bg for img landpage
}
else{
$dirname = 'pics/photography/photos/';
$folders = glob($dirname."*");
echo '<div class="photonav"><a class="info" href="photo.php">Directory</a><p>My Photo Collection</p>
<p><img id="photo-album-icon"src="pics/photography/cam.png">Nikon D3300 w/ 18-55mm Lens</p><p>Feel free to choose an album to look at!</p>
<p>This page is not updated. Currently in Korea. Will upload recent pictures soon.</p></div>';
echo '<div id="bg-color-form"><form method="get">';
foreach($folders as $foldername){
$newdir = $foldername.'/';
$value = $foldername;
$value = str_replace(".JPG","",$value);
$value = str_replace($dirname,"",$value);
$folderthumb = glob($newdir."*");	
if($folderthumb){
echo '<div class="album"><input type="image" src="'.$folderthumb[0].'" name="folder" value='.$value.'><p>'.$value.'</p><span>DC</span></input></div>';
}
}
}
echo '</form></div>';
?>
</div>
</div><!--webpage-->
</body>
<script src='web.js'></script>
<script src = 'jquery-3.1.0.min.js'></script>
<script src='photo.js'></script>
</html>