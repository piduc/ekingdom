var fight = [
	'You successfully stole gold from villager<br>You got:<br>Exp +1<br>Gold +',
	'You have beat women in the black and stole her gold<br>You got:<br>Exp +1<br>Gold +',
	'You stole gold from the trader<br>You got:<br>Exp +1<br>Gold +'
	
]


function newfight(){
	var newgold = Math.floor(Math.random() * 10) + 1;
	var collect = "<br><br><button class='collect' type='button' id='collect' style='height:30px; width:100px;' onclick='reload()'>Collect</button>";
	
	var random = Math.floor(Math.random() * (fight.length));
	if(newgold >= 8)
	{
		var honour = -1;
		var honourtext = "<br>Honour: ";
		document.getElementById("messages").innerHTML = fight[random]+newgold+honourtext+honour+collect;
	}
	else
	{
		var honour = 0;
		document.getElementById("messages").innerHTML = fight[random]+newgold+collect;
	}
	xhr = new XMLHttpRequest();
	xhr.open("GET",'fight.php?newgold='+newgold+'&honour='+honour, true);
	xhr.send();
	var elems = document.getElementsByClassName("buttons");
	for(var i = 0; i < elems.length; i++) {
		elems[i].disabled = true;
		elems[i].style.cursor = "not-allowed";
	}
	
}

//===========================================================ROB================================================

var rob = [
	'You successfully robbed villager<br>You got:<br>Exp +10<br>Gold +',
	'You have robbed women in the black and stole her gold<br>You got:<br>Exp +10<br>Gold +',
	'You robbed gold from the trader<br>You got:<br>Exp +10<br>Gold +'
	
]

function newrob(){
	var newgold = Math.floor(Math.random() * 100) + 1;
	var collect = "<br><br><button class='collect' type='button' id='collect' style='height:30px; width:100px;' onclick='reload()'>Collect</button>";
	var random = Math.floor(Math.random() * (rob.length));
	var honour = Math.floor(Math.random() * 10) + 1;
	honour = 0 - honour;
	var honourtext = "<br>Honour: ";
	document.getElementById("messages").innerHTML = rob[random]+newgold+honourtext+honour+collect;
	
	xhr = new XMLHttpRequest();
	xhr.open("GET",'rob.php?newgold='+newgold+'&honour='+honour, true);
	xhr.send();
	var elems = document.getElementsByClassName("buttons");
	for(var i = 0; i < elems.length; i++) {
		elems[i].disabled = true;
		elems[i].style.cursor = "not-allowed";
	}
	
}

//=======================================================DEFEND=====================================================


var defend = [
	'You successfully captured the robbers of a village<br>You got:<br>Exp +10<br>Gold ',
	'You have saved women in the black from the thieves<br>You got:<br>Exp +10<br>Gold ',
	'You caught the thieves who robbed the trader<br>You got:<br>Exp +10<br>Gold '
	
]

function newdefend(){
	var newgold = Math.floor(Math.random() * 100) + 1;
	var newgold = 0 - newgold;
	var collect = "<br><br><button class='collect' type='button' id='collect' style='height:30px; width:100px;' onclick='reload()'>Collect</button>";
	var random = Math.floor(Math.random() * (defend.length));
	var honour = Math.floor(Math.random() * 10) + 1;
	var honourtext = "<br>Honour: ";
	document.getElementById("messages").innerHTML = defend[random]+newgold+honourtext+honour+collect;
	
	xhr = new XMLHttpRequest();
	xhr.open("GET",'defend.php?newgold='+newgold+'&honour='+honour, true);
	xhr.send();
	var elems = document.getElementsByClassName("buttons");
	for(var i = 0; i < elems.length; i++) {
		elems[i].disabled = true;
		elems[i].style.cursor = "not-allowed";
	}
	
}
