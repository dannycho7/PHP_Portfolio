var revealed = false;
var menu = document.getElementById('container');
function reveal(){ //this method will change the class 
	revealed=true;
	if(getComputedStyle(menu).visibility=='hidden'){
	menu.style.visibility='visible';
	menu.style.opacity=1;
	document.getElementById('navigation').classList.toggle('gradientCntrl');
	document.getElementById('menuimg').style.display='none';
	document.getElementById('exit').style.display='inline-block';
	}
	else{
		document.getElementById('navigation').classList.toggle('gradientCntrl');
		menu.style.visibility='hidden';
		menu.style.opacity=0;
		document.getElementById('menuimg').style.display='inline-block';
		document.getElementById('exit').style.display='none';
	}
}
function menuswitch(){//runs when window gets resized
if(getComputedStyle(document.getElementById('menu-icon')).display=='none' && revealed){
	menu.style.visibility='visible';
	menu.style.opacity=1;
	revealed=false;
}
if(document.getElementsByClassName('slide-container')){
	var slidelist = document.getElementsByClassName('slide-container');
}
for(var i=0; i<slidelist.length;i++){//resizes slideshow div on resize
var slidecontainer = slidelist[i];
var height = getComputedStyle(slidecontainer.getElementsByClassName('initial-slide')[0]).height; 
slidecontainer.style.height=height;
}
}