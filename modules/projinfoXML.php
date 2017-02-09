<?php
	$projXML = 
		"<?xml version='1.0' encoding='UTF-8'?>
		<projects>
			<project name='EasySitter' accomplishment='Placed: 1st' purpose='WeHack Hackathon' year='2015'>
				<technologies>HTML/CSS/Javascript/Blueberry/Google Maps API</technologies>
				<description>
					EasySitter is a project and idea I worked on during the WeHack/Southeast Cities Hackathon with my teammate Esmeralda Nava. EasySitter connects local babysitters with parents at any time. Babysitters can simply check a box saying that they're ready to provide service (like uber). This site runs on a credit based system, so that parents don't have to immediately pay if they don't have the money at the moment or are willing to babysit themselves at another time to make up the credits.
				</description>
			</project>
			<project name='Hashtag Selfie' accomplishment='Placed: 2nd' purpose='OC Hacks i3' year='2015'>
				<technologies>Java/Java GUI</technologies>
				<description>
					Hashtag Selfie is a project that aimed to develop a photo editing platform with more freedom than the popular options such as Instagram. Alongside my teammates Kevin Lin, Edward Kim, and Eunice Huang, I developed the hex color editor portion for the photo editor.
				</description>
			</project>
			<project name='Personal Site' accomplishment='Learned a lot' purpose='Displaying my work' year='2016'>
				<technologies>PHP/HTML/CSS/JavaScript/jQuery/AJAX/XML</technologies>
				<description>
					I created my personal website to display my work. Throughout this process, I learned a lot about best web development practices. Website is constantly being improved upon. Most recent changes involved utilizing AJAX and XML parsing.
				</description>
			</project>
			<project name='Gomoku' accomplishment='Very first project' purpose='Great Board Game' year='2015'>
				<technologies>Java/Greenfoot</technologies>
				<description>
					Gomoku is a game I developed alongside my friend, Mandy Tsai. We used Greenfoot and Java to code the algorithms necessary to create not only the game, but also the AI system that alternated between Easy, Medium, and Hard.
				</description>
			</project>
		</projects>";
	$projInfo = new SimpleXMLElement($projXML);
?>