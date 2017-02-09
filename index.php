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
		<div class="content">
		<article>
			<?php require_once 'modules/social.php' ?>
			<?php require_once 'modules/intro_descr.php' ?>
		</article>
		</div>

		<div class="content" id='projects'>
			<h1 id = 'projh1'>Project Overview</h1>
			<?php include 'modules/projinfoXML.php';
				foreach($projInfo->project as $proj){
					echo "<div class='proj-container-container'><a href='projects#".$proj['name']."' class='content-proj-container'><p>".$proj['name']."</p><ul><li>".$proj['year']."</li><li>".$proj['accomplishment']."</li><li>".$proj['purpose']."</li></ul></a></div>";
				}
			?>
		</div>

		<div class="content">
			<h1>Experience</h1>
			<?php include 'modules/experienceXML.php';
				foreach($experienceInfo->experience as $exp){
					echo '<p><a href="'.$exp->url.'" target="_blank">'.$exp->name.'</a>&nbsp;-&nbsp;'.$exp->position.'&nbsp;'.$exp->time.'</p>';
				}
			?>
		</div>
	</div>
</div><!--loaded-->

</body>
<script src = 'js/jquery-3.1.0.min.js'></script>
<script src = 'js/web.js'></script>
<script src = 'js/index.js'></script>
<script src = 'js/photo.js'></script>
<script type="text/javascript" src="js/projects.js"></script>
</html>