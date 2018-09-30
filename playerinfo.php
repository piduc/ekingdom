<?php
	include_once('info.php');
	echo "<span><p class='text'>".$username."</p></span> <p class='text'>Level: <p class='textinfop'>".$level."</p></p>
		<p class='text'>Exp:<p class='textinfop'>".$exp."</p></p><p class='text'>Damage:<p class='textinfop'>".$totaldamage."</p></p>
		<p class='text'>Gold:<p class='textinfop'>".$gold."</p></p><p class='text'>Honour:<p class='textinfop'>".$honour."</p></p>
		<p class='text'>Title:<p href='' class='textinfop'>".$title."</p></p><p class='text'>Kingdom:<a href='' class='textinfo'>".$kingdom."</a></p>
		<p class='text'>Health:<p class='textinfop'>".$health."/100</p></p>";

?>