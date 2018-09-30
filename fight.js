function dhit10(){
	var exist = document.getElementById("timeche");
	if(exist)
	{
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("damageshowdiv").style.visibility='visible';
			document.getElementById("dmgshow").innerHTML = this.responseText;
			
		}
	}
	
	xhr.open("GET", "fight.php?hit=10&side=d&id="+x, true);
	xhr.send();
	
	}else{
	document.getElementById("damageshowdiv").style.visibility='visible';
	document.getElementById("dmgshow").innerHTML = "Round end!";
	}
}
function dhit50(){
	var exist = document.getElementById("timeche");
	if(exist)
	{
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("damageshowdiv").style.visibility='visible';
			document.getElementById("dmgshow").innerHTML = this.responseText;
			
		}
	}
	
	xhr.open("GET", "fight.php?hit=50&side=d&id="+x, true);
	xhr.send();
	}else{
	document.getElementById("damageshowdiv").style.visibility='visible';
	document.getElementById("dmgshow").innerHTML = "Round end!";
	}
}
function ahit10(){
	var exist = document.getElementById("timeche");
	if(exist)
	{
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("damageshowdiv").style.visibility='visible';
			document.getElementById("dmgshow").innerHTML = this.responseText;
			
		}
	}
	
	xhr.open("GET", "fight.php?hit=10&side=a&id="+x, true);
	xhr.send();
	}else{
	document.getElementById("damageshowdiv").style.visibility='visible';
	document.getElementById("dmgshow").innerHTML = "Round end!";
	}
}
function ahit50(){
	var exist = document.getElementById("timeche");
	if(exist)
	{
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("damageshowdiv").style.visibility='visible';
			document.getElementById("dmgshow").innerHTML = this.responseText;
			
		}
	}
	
	xhr.open("GET", "fight.php?hit=50&side=a&id="+x, true);
	xhr.send();
	}else{
	document.getElementById("damageshowdiv").style.visibility='visible';
	document.getElementById("dmgshow").innerHTML = "Round end!";
	}
}
function inforefresh(){
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("playerinfo").innerHTML = this.responseText;	
		}
	}
	
	xhr.open("GET", "playerinfo.php", true);
	xhr.send();
}

function progressrefresh(){
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("progress").innerHTML = this.responseText;	
		}
	}
	
	xhr.open("GET", "progressinfo.php?id="+x, true);
	xhr.send();
}

function damagerefresh(){
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("dmginfo").innerHTML = this.responseText;	
		}
	}
	
	xhr.open("GET", "damageinfo.php?id="+x, true);
	xhr.send();
}

function timerefresh(){
	var x = document.getElementById("hiddenid").textContent;
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("timecheck").innerHTML = this.responseText;	
		}
	}
	
	xhr.open("GET", "timeinfo.php?id="+x, true);
	xhr.send();
}

function eat(){
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("health").innerHTML = this.responseText;	
		}
	}
	
	xhr.open("GET", "eat.php", true);
	xhr.send();
}




