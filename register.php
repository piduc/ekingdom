<?php
	include_once("povezivanje.php");
	
	//USERNAME
	
	if(!isset($_POST['username']))
	{
		exit();
	}
	
	$username = $_POST['username'];
	$varu = 0;
	
	if(empty($username))
	{
		$varu = 1;
	}
	else
	if(!preg_match("/^[A-Za-z0-9]*$/", $username))
	{
		$varu = 2;
	}
	else
	
	$Upit       = "SELECT * FROM users WHERE username = '$username'";
	$Rezultat   = mysqli_query($Veza, $Upit);
	$BrojRedova = mysqli_num_rows($Rezultat);
	
	if($BrojRedova > 0)
	{
		$varu = 3;
	}
	else
	
	//LOZINKA
	
	if(!isset($_POST['password']))
	{
		exit();
	}
	
	$password = $_POST['password'];
	$varp = 0;

	if(empty($password))
	{
		$varp = 1;
	}
	
	//EMAIL
	
	if(!isset($_POST['email']))
	{
		exit();
	}
	
	$email = $_POST['email'];
	$vare    = 0;
	echo "mail ocitan"; 
	if(empty($email))
	{
		$vare = 1;
	}
	
	if(!preg_match("/^[A-Za-z0-9@._]*$/", $email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$vare = 2;
	}
	
	$Upit       = "SELECT * FROM users WHERE email = '$email';";
	$Rezultat   = mysqli_query($Veza, $Upit);
	$BrojRedova = mysqli_num_rows($Rezultat);
	
	if($BrojRedova > 0)
	{
		$vare = 3;
	}
	
	$Uslov = $varu == 0 && $varp == 0 && $vare == 0;
	
	if(!$Uslov)
	{
		header("Location: index.php?varu=$varu&varp=$varp&vare=$vare");
		echo "Doslo je do greske";
		exit();
	}
	else
	{
	$kingdom = $_POST['kingdom'];
	switch ($kingdom) {
    case 1:
        $kingdom = "Breittenland"; break;
    case 2:
        $kingdom = "Borson"; break;
    case 3:
        $kingdom = "Dorn"; break;
    case 4:
        $kingdom = "Herleier"; break;
    case 5:
        $kingdom = "Estan"; break;
    case 6:
        $kingdom = "Fretersland"; break;
    case 7:
        $kingdom = "Fanolone"; break;
    case 8:
        $kingdom = "Vohlin"; break;
    case 9:
        $kingdom = "Hingland"; break;
    }
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$Upit  = "INSERT INTO users (username, password, showpassword, email, kingdom) VALUES ('$username', '$hash', '$password', '$email', '$kingdom')";
		
		$Rezultat = mysqli_query($Veza, $Upit);
		session_start();
        $_SESSION['username'] = $username;
		$_SESSION['login']	  = 1;
		header("location: welcome.php");
		
		if($Rezultat)
		{
			echo "<br><br>Uspešno ste dodali novog korisnika u bazu.";
		}
		else
		{
			echo "<br><br>Desila se gre[ka pri dodavanju novog korisnika u bazu.";
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>