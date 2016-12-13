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
function show(str){
var	xhttp;
if(window.newXMLHttpRequest){
	xhttp= new XMLHttpRequest();
}
else{//for IE5 and IE6
	xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xhttp.onreadystatechange = function(){	if(this.readystate == 4 && this.status == 200){
		document.getElementById("content").innerHTML = this.responseText;}};
	xhttp.open("GET","photopolaroid.php?folder=" + str,true);
	xhttp.send();	
}