<?php
    /*$ImeServera = "sql109.byethost.com";
    $UIDServer  = "b11_22076729";
    $PWDServer  = "idemo123";
    $ImeBaze    = "b11_22076729_chat";*/
	
	$ImeServera = "localhost";
    $UIDServer  = "root";
    $PWDServer  = "";
    $ImeBaze    = "chat";
   
    $Veza = mysqli_connect($ImeServera, $UIDServer, $PWDServer, $ImeBaze);
   
   /* if($Veza)
    {
        echo "Uspesno ste se povezali sa bazom.<br><br>";
        echo "Sledi prijava korisnika...";
    }
    else
    {
        echo "Doslo je do greske pri povezivanju sa bazom!<br>";
        echo "Kontaktirajte administratora servera.";
        exit();
    }*/
?>
