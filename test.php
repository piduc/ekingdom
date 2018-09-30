<?php
	include_once('povezivanje.php');
	
	date_default_timezone_set("Europe/Belgrade");
	$startdate = strtotime(date("Y-m-d h:i:sa"));
	$starttime =  date("Y/m/d H:i:sa",$startdate);
	
	$id = $_GET['id'];
	$Upit = "SELECT time FROM battle WHERE id = '$id'";
	$Rezultat = mysqli_query($Veza, $Upit);
	
	while($Red = mysqli_fetch_assoc($Rezultat))
	{
		$enddate = $Red['time'];
	}
		$endtime = date("Y/m/d H:i:s",$enddate);
		$remaindate = strtotime("-1 hours", $enddate-$startdate);
		$remaintime = date("H:i:s",$remaindate);
		echo "<p class='time' >".$remaintime."</p></td>";
	
?>