<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once 'povezivanje.php';
		include 'info.php';
		if($_SESSION['login'] == 0)
		header("Location: index.php");
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
</script>
	<link rel="stylesheet" href="./main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="./dropdown.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="./equip.css" type="text/css" media="screen, projection"/>
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
						<a href="equipment.php" class="content"><img src="icon-dot.png"></img> Equipment</a>
						<a href="products.php" class="content"><img src="icon-dot.png"></img> Products</a>
						<a href="crates.php" class="content"><img src="icon-dot.png"></img> Crates</a>
						<a href="army.php" class="content"><img src="icon-dot.png"></img> Army</a>
						<a href="forest.php" class="content"><img src="icon-dot.png"></img> Forest</a>
						<a href="field.php" class="content"><img src="icon-dot.png"></img> Field</a>
						<a href="mine.php" class="content"><img src="icon-dot.png"></img> Mine</a>
						<a href="invited.php" class="content"><img src="icon-dot.png"></img> Invited Friends</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn"><img src="icon-coin.png"></img> MARKET</button>
					<div class="dropdown-content">
						<a href="myoffers.php" class="content"><img src="icon-dot.png"></img> My offers</a>
						<a href="cratesmarket.php" class="content"><img src="icon-dot.png"></img> Crates market</a>
						<a href="productsmarket.php" class="content"><img src="icon-dot.png"></img> Products market</a>
						<a href="equipmentmarket.php" class="content"><img src="icon-dot.png"></img> Equipment market</a>
						<a href="monetarymarket.php" class="content"><img src="icon-dot.png"></img> Monetary market</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn"><img src="icon-statistic.png"></img> STATISTIC</button>
					<div class="dropdown-content">
						<a href="statcountry.php" class="content"><img src="icon-dot.png"></img> Country</a>
						<a href="statcitizen.php" class="content"><img src="icon-dot.png"></img> Citizen</a>
						<a href="statregion.php" class="content"><img src="icon-dot.png"></img> Region</a>
						<a href="statarmy.php" class="content"><img src="icon-dot.png"></img> Army</a>
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
				<div class="main" id="messages" style="display: flex;">
				<div class="equipment">
					<div class="helmet"><img src="helmet<?php $Upit = "SELECT helmet FROM users WHERE username = '$username'"; $Rezultat = mysqli_query($Veza, $Upit); while($Red=mysqli_fetch_assoc($Rezultat))$helmet=$Red['helmet']; echo $helmet;?>.png" style="width:100px;height:100px;"></div>
					<div class="armor"><img src="armor<?php $Upit = "SELECT armor FROM users WHERE username = '$username'"; $Rezultat = mysqli_query($Veza, $Upit); while($Red=mysqli_fetch_assoc($Rezultat))$armor=$Red['armor']; echo $armor;?>.png" style="width:100px;height:100px;"></div>
					<div class="sword"><img src="sword<?php $Upit = "SELECT sword FROM users WHERE username = '$username'"; $Rezultat = mysqli_query($Veza, $Upit); while($Red=mysqli_fetch_assoc($Rezultat))$sword=$Red['sword']; echo $sword;?>.png" style="width:100px;height:100px;"></div>
					<div class="si"><img src="si<?php $Upit = "SELECT si FROM users WHERE username = '$username'"; $Rezultat = mysqli_query($Veza, $Upit); while($Red=mysqli_fetch_assoc($Rezultat))$si=$Red['si']; echo $si;?>.png" style="width:100px;height:100px;"></div>
				</div>
				<div class="other">
					<?php 
						$Upit = "SELECT * FROM equipment WHERE owned = '$id'";
						$Rezultat = mysqli_query($Veza, $Upit);
						while($Red = mysqli_fetch_assoc($Rezultat)){
							$type = $Red['type'];
							$statstype = $Red['statstype'];
							$stats = $Red['stats'];
							$equiped = $Red['equiped'];
							
							if($type == "armor")
								echo "<div class='oarmor'><img src=armor1.png style='width:100px;height:100px;'>";
							if($equiped=="0")
								echo "<button onclick='equip()' class='equipbutton'>Equip</button>";
							
							echo "</div>";
						}
						
						
						
					?>
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