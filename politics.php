<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once 'povezivanje.php';
		include 'info.php';
		if($_SESSION['login'] == 0)
		header("Location: index.php");
        if(isset($_GET['ckingdom'])){
		$ckingdom = $_GET['ckingdom'];
		switch ($ckingdom) {
			case 1:
				$ckingdom = "Breittenland"; break;
			case 2:
				$ckingdom = "Borson"; break;
			case 3:
				$ckingdom = "Dorn"; break;
			case 4:
				$ckingdom = "Herleier"; break;
			case 5:
				$ckingdom = "Estan"; break;
			case 6:
				$ckingdom = "Fretersland"; break;
			case 7:
				$ckingdom = "Fanolone"; break;
			case 8:
				$ckingdom = "Vohlin"; break;
			case 9:
				$ckingdom = "Hingland"; break;
			}
		}
		else
		$ckingdom = $kingdom;
		include_once 'checkkingdom.php';
	?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Kingdom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen" />
	<link rel="icon" href="avatar.ico">
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
	$(document).ready(function() {
    $(document).on('submit', '#simple_form', function() {
			
			document.forms["simple_form"].reset();
      return false;
     });
	});
	
	
	function logout()
			{
				if(confirm('Are you sure you want to log out?'))
				{
				xhr = new XMLHttpRequest();
				xhr.open("GET",'logout.php', true);
				xhr.send();
				location.reload();
				}
			}
	function kingdomselected(){
			var x = document.getElementById("kingdomchoose").value;
			window.location.assign("politics.php?ckingdom="+x)
		}
</script>
	<link rel="stylesheet" href="./main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="./dropdown.css" type="text/css" media="screen, projection"/>
</head>
<body>
<audio controls autoplay hidden>
  <source src="bss.mp3" type="audio/mpeg">
</audio>

	<div class="gornji"> 
				
				<span>
				<div class="dropdown">
					<button class="dropbtn"><img src="icon-home.png"></img> MY PLACES</button>
					<div class="dropdown-content">
						<a href="welcome.php" class="content"><img src="icon-dot.png"></img> Home</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Equipment</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Products</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Crates</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Army</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Forest</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Field</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Mine</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Invited Freinds</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn"><img src="icon-coin.png"></img> MARKET</button>
					<div class="dropdown-content">
						<a href="#" class="content"><img src="icon-dot.png"></img> My offers</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Crates market</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Products market</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Equipment market</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Monetary market</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn"><img src="icon-statistic.png"></img> STATISTIC</button>
					<div class="dropdown-content">
						<a href="#" class="content"><img src="icon-dot.png"></img> Country</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Citizen</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Region</a>
						<a href="#" class="content"><img src="icon-dot.png"></img> Army</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn"><img src="icon-flag.png"></img> KINGDOM</button>
					<div class="dropdown-content">
						<a href="battles.php" class="content"><img src="icon-dot.png"></img> Battles</a>
						<a href="laws.php" class="content"><img src="icon-dot.png"></img> Laws</a>
						<a href="politics.php" class="content"><img src="icon-dot.png"></img> Politics</a>
						<a href="economy.php" class="content"><img src="icon-dot.png"></img> Economy</a>
						<a href="regions.php" class="content"><img src="icon-dot.png"></img> Regions</a>
						<a href="map.php" class="content"><img src="icon-dot.png"></img> Map</a>
					</div>
				</div>
				</span>
				
	</div>
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji">
				<div class="info">
							<div class="image"></div>
							<span><p class="text"><?php echo $username?></p></span>
							<p class="text">Level:  <?php echo "<p class='textinfop'>".$level."</p>";?></p>
							<p class="text">Exp:  <?php echo "<p class='textinfop'>".$exp."</p>";?></p>
							<p class="text">Damage:  <?php echo "<p class='textinfop'>".$totaldamage."</p>";?></p>
							<p class="text">Gold:  <?php echo "<p class='textinfop'>".$gold."</p>";?> </p>
							<p class="text">Honour:  <?php echo "<p class='textinfop'>".$honour."</p>";?></p>
							<p class="text">Title:  <?php echo "<p href='' class='textinfop'>".$title."</p>";?></p>
							<p class="text">Kingdom:  <?php echo "<a href='' class='textinfo'>".$kingdom."</a>";?></p>
							<p class="text">Health:  <?php echo "<p class='textinfop'>".$health."/100</p>";?></p>
							<button class="logout" type="button" id="logout" style="height:30px; width:100px;" onclick="logout()">Log Out</button>
					
				</div>
				<div class="main" id="messages">
					<div class="politics">
						<select name='kingdomchoose' id='kingdomchoose' onchange='kingdomselected()' class='lawselect' style="margin-left:40%">"
						<?php
							$Upit      = "SELECT * FROM kingdom";
							$Rezultat  = mysqli_query($Veza, $Upit);
							while($Red = mysqli_fetch_assoc($Rezultat))
							{
								$id 		= $Red['id'];
								$kingdoms    = $Red['name'];
								if($kingdoms==$ckingdom){
									echo "<option value='".$id."' selected>".$kingdoms."</option>";}
								else
									echo "<option value='".$id."'>".$kingdoms."</option>";
							}
						?></select>
						
						<div class="king"><img src="avatar.png" class="imageking"><br>
						<?php  
							$Upit = "SELECT username, level, honour, totaldamage FROM users WHERE kingdom = '$ckingdom' AND title = '5'";
							$Rezultat = mysqli_query($Veza, $Upit);
							
							while($Red = mysqli_fetch_assoc($Rezultat)){
								$name = $Red['username'];
								$level = $Red['level'];
								$honour = $Red['honour'];
								$dmg = $Red['totaldamage'];
								
								echo "King: ".$name."<br>Level: ".$level."<br>Damage: ".$dmg."<br>Honour: ".$honour;
							}
						?>
						
						<table class="crel">
							<tr>
								<th>Enemy</th>
								<th>Neutral</th>
								<th>Friends</th>
							</tr>
							<tr>
							<?php
							
								$Upit = "SELECT * FROM kingdom WHERE name = '$ckingdom'";
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
																else echo "<td></td><tr>";
							$m = $m-1;
							}	
							?>
						</table>
					</div>
				</div>
			</div>
		<div class="desni">
			
		</div>
    </div>
	
	
	
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/rChat.js"></script>
	<script src="messages.js"></script>
	
</body>
</html>	