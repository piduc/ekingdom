<?php
$remain = $remaindate -1;
	if($remain==$enddate)
	{
		if($amdg>$ddmg)
		{
			$Upit = "UPDATE regions SET owned = '$attacker' WHERE id = '$region'";
			$Rezultat = mysqli_query($Veza, $Upit);
		}
	}
	
?>