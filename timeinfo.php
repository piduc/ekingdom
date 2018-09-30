<?php
	include_once('povezivanje.php');
	
	date_default_timezone_set("Europe/Belgrade");
	$startdate = strtotime(date("Y-m-d h:i:sa"));
	$starttime =  date("Y/m/d H:i:sa",$startdate);
	
	$id = $_GET['id'];
	$Upit = "SELECT time, attacker, defender, admg, ddmg, region FROM battle WHERE id = '$id'";
	$Rezultat = mysqli_query($Veza, $Upit);
	
	while($Red = mysqli_fetch_assoc($Rezultat))
	{
		$enddate = $Red['time'];
		$admg = $Red['admg'];
		$ddmg = $Red['ddmg'];
		$region = $Red['region'];
		$attacker = $Red['attacker'];
		$defender = $Red['defender'];
	}
		$remaindate = strtotime("-1 hours", $enddate-$startdate);
		$remaintime = date("H:i:s",$remaindate);
		$endtime = date("Y/m/d H:i:s",$enddate);
		if($startdate==$enddate){
			echo "<p class='time' value='end' id='timeche'>00:00:00</p></td>";
		}else
			if($startdate<$enddate){
		echo "<p class='time' id='timeche' >".$remaintime."</p></td>";
		}
	
?>