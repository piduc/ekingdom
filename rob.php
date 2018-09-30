<?php
	include_once('povezivanje.php');
	include_once('info.php');
	$exp= $exp + 10;
	$newgold = $_GET['newgold'];
	$newhonour = $_GET['honour'];
	$gold = $gold + $newgold;
	$honour = $honour + $newhonour;
	$Upit = "UPDATE users SET exp = '$exp', gold = '$gold', honour = '$honour' WHERE username = '$username'";
	$Rezultat = mysqli_query($Veza, $Upit);
?>