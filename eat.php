<?php
	include_once('povezivanje.php');
	include_once('info.php');
	
	if($health<51 && $food > 1 && $foodlimit > 1)
	{
		$health = $health + 50;
		$foodlimit = $foodlimit - 1;
		$food = $food - 1;
		
		$Upit = "UPDATE users SET food = '$food', foodlimit = '$foodlimit', health = '$health' WHERE username = '$username'";
		$Rezultat = mysqli_query($Veza, $Upit);
		
	}
?>