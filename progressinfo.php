<?php
	include_once('povezivanje.php');
	$id = ($_GET['id']);
			$Upit = "SELECT admg, ddmg FROM battle WHERE id='$id'";
			$result = mysqli_query($Veza, $Upit);
			while($Red = mysqli_fetch_assoc($result))
			{
				$ddmg = $Red['ddmg'];
				$admg = $Red['admg'];
				$alldmg = $ddmg+$admg;
				if($alldmg>0){
				$ddmgp = $ddmg/$alldmg*100;
				$admgp = $admg/$alldmg*100;
				}else
				$ddmgp = $admgp = 50;
			}
	echo "
	<div class='progress-bar progress-defender' style='width:".$ddmgp."%'>Defender</div>
	<div class='progress-bar progress-attacker' style='width:".$admgp."%'>Attacker</div>";

?>