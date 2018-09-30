<?php
	include_once("povezivanje.php");
	session_start();
	$username = $_SESSION['username'];
	$Upit = "SELECT id, gold, level, exp, honour, kingdom, title, food, foodlimit, health, strength, totaldamage FROM users WHERE username = '$username'";
	$Rezultat = mysqli_query($Veza, $Upit);
	while($Red = mysqli_fetch_assoc($Rezultat))
	{	
		$id = $Red['id'];
		$totaldamage = $Red['totaldamage'];
		$strength = $Red['strength'];
		$health = $Red['health'];
		$foodlimit = $Red['foodlimit'];
		$food = $Red['food'];
		$gold = $Red['gold'];
		$level = $Red['level'];
		$exp = $Red['exp'];
		$honour = $Red['honour'];
		$kingdom = $Red['kingdom'];
		$title1 = $Red['title'];
		$dmg = $strength*$level;
	}
	switch ($title1) {
    case 0:
        $title = "Peasant";
        break;
    case 1:
        $title = "Squire";
        break;
    case 2:
        $title = "Knight";
        break;
	case 3:
        $title = "Duke";
        break;
	case 4:
        $title = "Congressman";
        break;
	case 5:
        $title = "King";
        break;
}
	
	
	//LEVELI
	
	if($exp >= 2000)
		$level = 100;
	else if($exp >= 1000)
		$level = 10;
	else if($exp >= 500)
		$level = 9;
	else if($exp >= 250)
		$level = 8;
	else if($exp >= 160)
		$level = 7;
	else if($exp >= 80)
		$level = 6;
	else if($exp >= 40)
		$level = 5;
	else if($exp >= 20)
		$level = 4;
	else if($exp >= 10)
		$level = 3;
	else if($exp >= 5)
		$level = 2;
	
	$Upit = "UPDATE users SET level = '$level' WHERE username = '$username'";
	$Rezultat = mysqli_query($Veza, $Upit);
?>