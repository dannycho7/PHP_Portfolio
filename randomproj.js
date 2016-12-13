function dropdown(x,y){ //x is the id of the element you want to reveal and y is the class of the element being clicked
	if(x=='pikatext'){
		if(pikarecent=='initial'){
			document.getElementById('pika0').style.visibility= "hidden";
		}
		randomNum();
		x = 'pika'+ rand;
		pikarecent=x;
		pikaremove(); //this helps the user change the text with multiple clicks as it gets rid of currently active pikatext-content
	}
	document.getElementById(x).classList.toggle('drop');
	recent = y;
	}
var time;
var rand = 5;
var recent ='temp';
var pikarecent ='initial';
window.onclick = function(event){
		if(!event.target.matches(recent)){ //if it matches the most recently clicked dropped down activator
		var drop = document.getElementsByClassName('dropdown-content');
		for(var i=0;i<drop.length;i++){
			if(drop[i].classList.contains('drop')){
				drop[i].classList.remove('drop');
			}
		}
		var dropsnap = document.getElementById('snapid');
		if(dropsnap.classList.contains('drop')){
			dropsnap.classList.remove('drop');
		}
		pikaremove(); 
		pikarecent='initial';
		document.getElementById('pika0').style.visibility= "visible";
	}
}
function randomNum(){//recursive function for getting a random number diff from previous. used for pika
	var prev = rand;
	rand = Math.floor((Math.random()*3)+1);
	if(prev===rand){ //if the previous number and the new value of rand is the same we do it all over again
		randomNum();
	}
}
function pikaremove(){
	var droppika = document.getElementsByClassName('pikatext-content');
	for(var i=0; i<droppika.length;i++){
		if(droppika[i].classList.contains('drop')){
			droppika[i].classList.remove('drop');
	}
}
}
