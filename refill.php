<?php
	include_once('povezivanje.php');
	$sql = "UPDATE users SET foodlimit = foodlimit + 1, health = 100";
	$result = mysqli_query($Veza, $sql);
	/*while($Red = mysqli_fetch_assoc($result))
	{
		$username = $Red['username'];
		$foodlimit = $Red['foodlimit'];
		$health = 100;
		$foodlimit = $foodlimit + 1;
		
		$sql = "UPDATE users SET foodlimit = '$foodlimit', health = '$health' WHERE username = '$username'";
		$result = mysqli_query($Veza, $sql);
		
		
	}*/
?>