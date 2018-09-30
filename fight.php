<?php
	include_once('povezivanje.php');
	include_once('info.php');
	$id = $_GET['id'];
	$side = $_GET['side'];
	$hit = $_GET['hit'];
	if($hit == 10){ $exp= $exp + 1; $healthneed=10;}else if($hit == 50){ $exp= $exp + 5;  $dmg=$dmg*5; $healthneed=50;}
	$mindmg = $dmg/100*70;
	$maxdmg = $dmg/100*130;
	$fightdmg = rand($mindmg,$maxdmg);
	$totaldamage = $totaldamage + $fightdmg;
	if($healthneed>$health){echo "No health left";}else 
	{
	echo "Damage done: ".$fightdmg;
	$health = $health-$healthneed;
	$Upit = "UPDATE users SET exp = '$exp', totaldamage = '$totaldamage', health = '$health' WHERE username = '$username'";
	$Rezultat = mysqli_query($Veza, $Upit);
	
	
	$Upit = "SELECT ddmg, admg FROM battle WHERE id = '$id'";
	$result = mysqli_query($Veza, $Upit);
		while($Red = mysqli_fetch_assoc($result))
		{
			$ddmg = $Red['ddmg'];
			$admg = $Red['admg'];
		}
	if($side=="d")
		{
			$ddmg = $ddmg + $fightdmg;
		}
	if($side=="a")
		{
			$admg = $admg + $fightdmg;
		}
		
	$Upit = "UPDATE battle SET ddmg = '$ddmg', admg = '$admg' WHERE id = '$id'";
	$Rezultat = mysqli_query($Veza, $Upit);
	}
?>