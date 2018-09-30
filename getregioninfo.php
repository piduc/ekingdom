<?php
	include_once 'povezivanje.php';
	$id = $_GET['id']+1;
	$Upit = "SELECT owned, rowned FROM regions WHERE id = '$id'";
	$Rezultat = mysqli_query($Veza, $Upit);while($Red = mysqli_fetch_assoc($Rezultat)){
	$owned = $Red['owned']; $rowned = $Red['rowned'];}
	
	echo "<p class='text'>Rightful owner: <p class='textinfor'  >".$rowned."</p><p class='text'>Owned by: <p class='textinfor'  >".$owned.
	"</p><p class='text'>Population: <p class='textinfor'  >500 </p><p class='text'>Resource: <p class='textinfor'  >none</p><p class='text'>
	ID: <p class='textinfor'  >".$id."</p>";
	
?>