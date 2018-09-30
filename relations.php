<?php
	include_once('povezivanje.php');
	
	$x = "Breittenland";
	$kingdom = $x;
	if($kingdom=="Breittenland")
	{
		$kingdom1 = "Borson";
        $kingdom2 = "Dorn";
        $kingdom3 = "Herleier";
        $kingdom4 = "Estan";
        $kingdom5 = "Fretersland";
        $kingdom6 = "Fanolone";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else
	if($kingdom=="Borson")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Dorn";
        $kingdom3 = "Herleier";
        $kingdom4 = "Estan";
        $kingdom5 = "Fretersland";
        $kingdom6 = "Fanolone";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Dorn")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Herleier";
        $kingdom4 = "Estan";
        $kingdom5 = "Fretersland";
        $kingdom6 = "Fanolone";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Herleier")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Dorn";
        $kingdom4 = "Estan";
        $kingdom5 = "Fretersland";
        $kingdom6 = "Fanolone";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Estan")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Dorn";
        $kingdom4 = "Herleier";
        $kingdom5 = "Fretersland";
        $kingdom6 = "Fanolone";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Fretersland")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Dorn";
        $kingdom4 = "Herleier";
        $kingdom5 = "Estan";
        $kingdom6 = "Fanolone";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Fanole")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Dorn";
        $kingdom4 = "Herleier";
        $kingdom5 = "Estan";
        $kingdom6 = "Fretersland";
        $kingdom7 = "Vohlin"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Vohlin")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Dorn";
        $kingdom4 = "Herleier";
        $kingdom5 = "Estan";
        $kingdom6 = "Fretersland";
        $kingdom7 = "Fanole"; 
        $kingdom8 = "Hingland";
	}else 
	if($kingdom=="Hingland")
	{
		$kingdom1 = "Breittenland";
        $kingdom2 = "Borson";
        $kingdom3 = "Dorn";
        $kingdom4 = "Herleier";
        $kingdom5 = "Estan";
        $kingdom6 = "Fretersland";
        $kingdom7 = "Fanole"; 
        $kingdom8 = "Vohlin";
	}
	
	
	
	$Upit = "SELECT * FROM kingdom WHERE name = 'Fretersland'";
								$Rezultat = mysqli_query($Veza, $Upit);
								$e = $n = $f = 0;
								while($Red = mysqli_fetch_assoc($Rezultat))
								{
										$k1 = $Red['k1'];
										$k2 = $Red['k2'];
										$k3 = $Red['k3'];
										$k4 = $Red['k4'];
										$k5 = $Red['k5'];
										$k6 = $Red['k6'];
										$k7 = $Red['k7'];
										$k8 = $Red['k8'];
										
								}
								if($k1=="Enemy")$e=$e+1;else if($k1=="Neutral")$n=$n+1;else if($k1=="Friends")$f=$f+1;
								if($k2=="Enemy")$e=$e+1;else if($k2=="Neutral")$n=$n+1;else if($k2=="Friends")$f=$f+1;
								if($k3=="Enemy")$e=$e+1;else if($k3=="Neutral")$n=$n+1;else if($k3=="Friends")$f=$f+1;
								if($k4=="Enemy")$e=$e+1;else if($k4=="Neutral")$n=$n+1;else if($k4=="Friends")$f=$f+1;
								if($k5=="Enemy")$e=$e+1;else if($k5=="Neutral")$n=$n+1;else if($k5=="Friends")$f=$f+1;
								if($k6=="Enemy")$e=$e+1;else if($k6=="Neutral")$n=$n+1;else if($k6=="Friends")$f=$f+1;
								if($k7=="Enemy")$e=$e+1;else if($k7=="Neutral")$n=$n+1;else if($k7=="Friends")$f=$f+1;
								if($k8=="Enemy")$e=$e+1;else if($k8=="Neutral")$n=$n+1;else if($k8=="Friends")$f=$f+1;
								$m = max($e, $n, $f);
								
							while(!$m==0)
							{
								if($k1=="Enemy"){
								echo "<td>".$kingdom1."</td>"; $k1="none";}
									else if($k2=="Enemy"){
									echo "<td>".$kingdom2."</td>"; $k2="none";}
										else if($k3=="Enemy"){
										echo "<td>".$kingdom3."</td>"; $k3="none";}
											else if($k4=="Enemy"){
											echo "<td>".$kingdom4."</td>"; $k4="none";}
												else if($k5=="Enemy"){
												echo "<td>".$kingdom5."</td>"; $k5="none";}
													else if($k6=="Enemy"){
													echo "<td>".$kingdom6."</td>"; $k6="none";}
														else if($k7=="Enemy"){
														echo "<td>".$kingdom7."</td>"; $k7="none";}
															else if($k8=="Enemy"){
															echo "<td>".$kingdom8."</td>"; $k8="none";}
																else echo "<td></td>";
								if($k1=="Neutral"){
								echo "<td>".$kingdom1."</td>"; $k1="none";}
									else if($k2=="Neutral"){
									echo "<td>".$kingdom2."</td>"; $k2="none";}
										else if($k3=="Neutral"){
										echo "<td>".$kingdom3."</td>"; $k3="none";}
											else if($k4=="Neutral"){
											echo "<td>".$kingdom4."</td>"; $k4="none";}
												else if($k5=="Neutral"){
												echo "<td>".$kingdom5."</td>"; $k5="none";}
													else if($k6=="Neutral"){
													echo "<td>".$kingdom6."</td>"; $k6="none";}
														else if($k7=="Neutral"){
														echo "<td>".$kingdom7."</td>"; $k7="none";}
															else if($k8=="Neutral"){
															echo "<td>".$kingdom8."</td>"; $k8="none";}
																else echo "<td></td>";
								if($k1=="Friends"){
								echo "<td>".$kingdom1."</td></tr><tr>"; $k1="none";}
									else if($k2=="Friends"){
									echo "<td>".$kingdom2."</td></tr><tr>"; $k2="none";}
										else if($k3=="Friends"){
										echo "<td>".$kingdom3."</td></tr><tr>"; $k3="none";}
											else if($k4=="Friends"){
											echo "<td>".$kingdom4."</td></tr><tr>"; $k4="none";}
												else if($k5=="Friends"){
												echo "<td>".$kingdom5."</td></tr><tr>"; $k5="none";}
													else if($k6=="Friends"){
													echo "<td>".$kingdom6."</td></tr><tr>"; $k6="none";}
														else if($k7=="Friends"){
														echo "<td>".$kingdom7."</td></tr><tr>"; $k7="none";}
															else if($k8=="Friends"){
															echo "<td>".$kingdom8."</td></tr><tr>"; $k8="none";}
																else echo "<td></td>";
							$m = $m-1;
							}	
	
	



?>