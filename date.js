function updateTime(){
document.getElementById('date').innerHTML = Date();
}
updateTime();
setInterval(updateTime,1000);
