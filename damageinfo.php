<?php
	include_once('povezivanje.php');
	include_once('info.php');
	$id = ($_GET['id']);
			$Upit = "SELECT admg, ddmg FROM battle WHERE id='$id'";
			$result = mysqli_query($Veza, $Upit);
			while($Red = mysqli_fetch_assoc($result))
			{
				$ddmg = $Red['ddmg'];
				$admg = $Red['admg'];
			}
	echo "
			<td align='left'><p class='defender' style='margin-left:15px;'>".$ddmg."</p></td>
			<td></td>
			<td align='center'><p class='food' >You have ".$food." food<br>Food limit: ".$foodlimit."</p></td>
			<td></td>
			<td align='right'><p class='attacker' style='margin-right:15px;'>".$admg."</p></td>";
?>