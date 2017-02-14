<?php
	$projXML = 
		"<?xml version='1.0' encoding='UTF-8'?>
		<projects>
			<project name='LookFWD' accomplishment='Coming Soon in Store' purpose='Product' year='2017'>
				<technologies>JavaScript, HTML/CSS, Chart.js API, Youtube SPF API, Chrome Storage API</technologies>
				<description><![CDATA[LookFWD is a chrome extension that prevents procrastination!<br/>There I was, walking to my desk and ready to get some work done. I go on my laptop and open up tabs to facebook, youtube and gmail. The usual suspects. You can predict what happened next.<br/> We've all been there. Two days before a deadline, you motivate yourself to work the rest of the day. And somehow you end up watching DIY cooking videos, one after another and scrolling endlessly through your Facebook newsfeed. As students, we know this situation all too well. <br/> LookFWD was originally inspired by my efforts to prevent this type of procrastination. At the start of the winter break, I dedicated myself to logging out of Facebook prior to closing the browser, and before I knew it I was only logging back on to Facebook once or twice a day to check messages. <br/> It seems that periodical reminders to stay on task can keep you in focus. By consistently asking you if watching an Entertainment video is the best choice 12 hours before a midterm, LookFWD aims to reduce procrastination, even if by a little bit. LookFWD will give warnings based on the category and metadata of the content being loaded by the browser and provide analytics based on the amount of time spent on non-educational videos<br/>
					General Functionalities: <br/>
					1. Reminds and alerts users when they're off task <br/>
					2. Blocks out thumbnails/clickbait along with preventing seamless youtube video streaming and facebook news feed scroll <br/>
					3. Scrapes Youtube and Facebook to hide comments on both platforms and videos on youtube based on categories
					4. Provides inspirational quotes throughout the blocking of information <br/>
					5. Provides analytics data visualization based on user activity via Chrome.storage API and Chart.js API <br/>

					This was a submission by Danny Cho and Brian Yan for HackPoly 2017
					]]></description>
			</project>
			<project name='Copcut' accomplishment='Proof of Concept' purpose='Product' year='2016'>
				<technologies>JavaScript / Bootstrap / React.js / MySQL / Node.js</technologies>
				<description>I worked on Copcut as a potential product with my friends Victor Cheng and Ankusk Rahaybhari. Copcut is a web application that handles scheduling and payments for barbers. We aimed to help students at UC Santa Barbara handle their barber transactions as well as connect students to local barbers. Our payment system allows for a deposit to be made, so that barbers can implement a cancellation fee and not have their appointment no-shows waste their time. After completing about 70% of the app, our main barber contact was banned from cutting hair on campus, and the project was dropped.</description>
			</project>
			<project name='EasySitter' accomplishment='Placed: 1st' purpose='WeHack Hackathon' year='2015'>
				<technologies>Javascript / Blueberry / Google Maps API</technologies>
				<description>EasySitter is a project and idea I worked on during the WeHack/Southeast Cities Hackathon with my teammate Esmeralda Nava. EasySitter connects local babysitters with parents at any time. Babysitters can simply check a box saying that they're ready to provide service (like uber). This site runs on a credit based system, so that parents don't have to immediately pay if they don't have the money at the moment or are willing to babysit themselves at another time to make up the credits.</description>
			</project>
			<project name='HashtagSelfie' accomplishment='Placed: 2nd' purpose='OC Hacks i3' year='2015'>
				<technologies>Java / Java GUI</technologies>
				<description>Hashtag Selfie is a project that aimed to develop a photo editing platform with more freedom than the popular options such as Instagram. Alongside my teammates Kevin Lin, Edward Kim, and Eunice Huang, I developed the hex color editor portion for the photo editor.</description>
			</project>
			<project name='PersonalSite' accomplishment='Learned a lot' purpose='Displaying my work' year='2016'>
				<technologies>PHP / JavaScript / jQuery / AJAX / XML</technologies>
				<description>I created my personal website to display my work. Throughout this process, I learned a lot about best web development practices. Website is constantly being improved upon. Most recent changes involved utilizing AJAX and XML parsing.</description>
			</project>
			<project name='Gomoku' accomplishment='Very first project' purpose='Great Board Game' year='2015'>
				<technologies>Java / Greenfoot</technologies>
				<description>Gomoku is a game I developed alongside my friend, Mandy Tsai. We used Greenfoot and Java to code the algorithms necessary to create not only the game, but also the AI system that alternated between Easy, Medium, and Hard.</description>
			</project>
		</projects>";
	$projInfo = new SimpleXMLElement($projXML);
?>