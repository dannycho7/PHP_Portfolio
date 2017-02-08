$(document).ready(function(){
	iconresize();
});
function iconresize(){
	if(document.getElementById("photo-album-icon")){
	var lineheight=parseInt($("p").css("line-height"));
	document.getElementById("photo-album-icon").style.height=lineheight+"px";
}
}
window.addEventListener("resize",function(){iconresize();},false);


function showPhoto(str){
	var	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.body.innerHTML = this.responseText;
			if(str != ""){
				window.history.pushState({}, 'Danny\'s Personal Site', 'photo?folder='+str);
			}
			else{
				window.history.pushState({}, 'Danny\'s Personal Site', 'photo');
			}
		}
	};
	xhttp.open("GET","photo?folder=" + str,true);
	xhttp.send();	
}