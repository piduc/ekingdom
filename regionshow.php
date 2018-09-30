<?php
	$defender  = $_GET['defender'];
	include_once('povezivanje.php');
	
	switch ($defender) {
    case 1:
        $defender = "Breittenland"; break;
    case 2:
        $defender = "Borson"; break;
    case 3:
        $defender = "Dorn"; break;
    case 4:
        $defender = "Herleier"; break;
    case 5:
        $defender = "Estan"; break;
    case 6:
        $defender = "Fretersland"; break;
    case 7:
        $defender = "Fanolone"; break;
    case 8:
        $defender = "Vohlin"; break;
    case 9:
        $defender = "Hingland"; break;
    }


	$Upit      = "SELECT id FROM regions WHERE owned = '$defender'";
	$Rezultat  = mysqli_query($Veza, $Upit);
	
	while($Red = mysqli_fetch_assoc($Rezultat))
	{
		$regionid    = $Red['id'];
		
		echo "<option value='".$regionid."'>Region ".$regionid."</option>";
 	}
?>