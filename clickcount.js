function clickCount(x){
	if(x==1){
	if(typeof(Storage) !== "undefined")
	{
		if(localStorage.clickcount)
		{
			localStorage.clickcount = Number(localStorage.clickcount) + 1;
		}
		else{
			localStorage.clickcount = 1;
		}
		document.getElementById('result').innerHTML = "You have clicked this " + Number(localStorage.clickcount) + " times";
	}
	else{
		document.getElementById('result').innerHTML = "Sorry, your browser does not support this function";
	}
	}
	else if(x==2){
		localStorage.clickcount = 0;
		document.getElementById('result').innerHTML = "You have not clicked this button yet!";
	}
}
