<?php
	include_once("povezivanje.php");
	include_once("info.php");
	
	
	$defender = $_POST['defender'];
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
	
	$startdate = strtotime(date("Y-m-d h:i:sa"));
	$Upit       = "SELECT * FROM battle WHERE defender = '$defender' AND attacker = '$kingdom' AND time > '$startdate'";
	$Rezultat   = mysqli_query($Veza, $Upit);
	$Red = mysqli_num_rows($Rezultat);
	if($Red == 0)
	{
		$Upit       = "SELECT * FROM battle WHERE defender = '$kingdom' AND attacker = '$defender' AND time > '$startdate'";
		$Rezultat   = mysqli_query($Veza, $Upit);
		$Red = mysqli_num_rows($Rezultat);
		if($Red == 0)
		{
			$region = $_POST['region'];
			date_default_timezone_set("Europe/Belgrade");
			$enddate=strtotime("+24 hours", $startdate);
			
			$Upit  = "INSERT INTO battle (attacker, defender, time, region, starttime) VALUES ('$kingdom', '$defender', '$enddate', '$region', '$startdate')";
			$Rezultat = mysqli_query($Veza, $Upit);
			
			date_default_timezone_set("Europe/Belgrade");
			$date = date("Y-m-d h:i:sa");
			$Upit = "INSERT INTO laws (type, status, proposed, time, attacker, defender, region) VALUES ('Declare War','Accepted','$username','$date', '$kingdom', '$defender', '$region')";
			$Rezultat = mysqli_query($Veza, $Upit);
			header("Location: battles.php");
	
		}else echo "Rat je vec u toku!<br><a href='welcome.php'>Nazad</a>";
	}else
		echo "Rat je vec u toku!<br><a href='welcome.php'>Nazad</a>";
	
	
?>