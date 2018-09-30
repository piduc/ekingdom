<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once 'povezivanje.php';
		include 'info.php';
		if($_SESSION['login'] == 0)
		header("Location: index.php");
		
		
			$id = ($_GET['id']);
			$Upit = "SELECT id, defender, attacker, time, admg, ddmg FROM battle WHERE id='$id'";
			$result = mysqli_query($Veza, $Upit);
			while($Red = mysqli_fetch_assoc($result))
			{
				$defender = $Red['defender'];
				$attacker = $Red['attacker'];
				$ddmg = $Red['ddmg'];
				$admg = $Red['admg'];
				$time = $Red['time'];
				$hour = round($time/3600-0.5);
				$min = $time/60%60;
				$sec = $time%60;
				if($hour<10)
					$hour = "0".$hour;
				if($min<10)
					$min = "0".$min;
				if($sec<10)
					$sec = "0".$sec;
				$time = $hour.":".$min.":".$sec;
				
				$alldmg = $ddmg+$admg;
				if($alldmg>0){
				$ddmgp = $ddmg/$alldmg*100;
				$admgp = $admg/$alldmg*100;
				}else
				$ddmgp = $admgp = 50;
				
				
			
			}
		?>
	
	
	
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Kingdom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen" />
	<link rel="icon" href="avatar.ico">
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="fight.js"></script>
	<script>
	$(document).ready(function() {
    $(document).on('submit', '#simple_form', function() {
			
			document.forms["simple_form"].reset();
      return false;
     });
	});
	
	setInterval(inforefresh, 500);
	setInterval(progressrefresh, 7000);
	setInterval(damagerefresh, 500);
	setInterval(timerefresh, 500);
	
	function hidechat()
	{
		var x = document.getElementById("chatView");
		if (x.style.display === "none") 
			{
			x.style.display = "block";
			} 
			else 
			{
			x.style.display = "none";
			}
	}
	
	function reload()
			{
				location.reload();
			}
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
	function mouseup()
			{
				document.getElementById("damageshowdiv").style.visibility='hidden';
			}
</script>
	<link rel="stylesheet" href="./main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="./dropdown.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="./progress.css" type="text/css" media="screen, projection"/>
</head>
<body onmouseup="mouseup()" onload="timerefresh();">

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
	<style>
	
	</style>
	<div class="glavni">
		<div class="levi">
			<div id="hiddenid" style="visibility: hidden;"><?php echo $id;?></div>
		</div>
			<div class="srednji">
				<div class="info">
							<div class="image"></div>
							<div id="playerinfo">
							<span><p class="text"><?php echo $username?></p></span>
							<p class="text">Level:  <?php echo "<p class='textinfop'>".$level."</p>";?></p>
							<p class="text">Exp:  <?php echo "<p class='textinfop'>".$exp."</p>";?></p>
							<p class="text">Damage:  <?php echo "<p class='textinfop'>".$totaldamage."</p>";?></p>
							<p class="text">Gold:  <?php echo "<p class='textinfop'>".$gold."</p>";?> </p>
							<p class="text">Honour:  <?php echo "<p class='textinfop'>".$honour."</p>";?></p>
							<p class="text">Title:  <?php echo "<p href='' class='textinfop'>".$title."</p>";?></p>
							<p class="text">Kingdom:  <?php echo "<a href='' class='textinfo'>".$kingdom."</a>";?></p>
							<p class="text" id="health">Health:  <?php echo "<p class='textinfop'>".$health."/100</p>";?></p>
							</div>
							<button class="logout" type="button" id="logout" style="height:30px; width:100px;" onclick="logout()">Log Out</button>
				</div>
				<div class="main" id="messages">
							
						<div class="battlecover">
							<img src="battle.png" class="battleimg"></img>
						<table class="first">
						<tr>
							<td align="left"><p class="defender" style="margin-left:15px;"><?php echo $defender;?></p></td>
							<td align="center" id="timecheck"><p class="time"><?php echo $time;?></p></td>
							<td align="right"><p class="attacker" style="margin-right:15px;"><?php echo $attacker;?></p></td>
						</tr>
						</table>
						<table class="damageshow">
							<tr>
								<td></td>
								<td>
									<div id="damageshowdiv" class="damageshowdiv" style="visibility: hidden;">
										<img src="damage.png" class="damageimg"/><br><br>
										<div id = "dmgshow">You have dealed 100 damage</div>
									</div>
								</td>
								<td></td>
							</tr>
							</table>
						<br>
						<span>
							
								<div class="progress" id="progress">
									<div class="progress-bar progress-defender" style="width:<?php echo $ddmgp;?>%">
									  Defender
									</div>
									
									<div class="progress-bar progress-attacker" style="width:<?php echo $admgp;?>%">
									  Attacker
									</div>
								</div>
							
							<div style="text-align:center">
							<img src="Dorn.png" class="flag-medium" style="float: left;"/>
								<span class="progress-dot"></span>
							<img src="Fretersland.png" class="flag-medium" style="float: right;"/>
							</div>
						</span>
							<table class="damage" >
							<tr id="dmginfo">
								<td align="left"><p class="defender" style="margin-left:15px;"><?php echo $ddmg;?></p></td>
								<td></td>
								<td align="center"><p class="food" ><?php echo "You have ".$food." food<br>Food limit: ".$foodlimit;?></p></td>
								<td></td>
								<td align="right"><p class="attacker" style="margin-right:15px;"><?php echo $admg;?></p></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td align="center"><button class="mainbutton" onclick="eat()">EAT</button></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><p class="defender" style="margin-left:15px; font-size: 19px;">Defender Side:</p></td>
								<td></td>
								<td></td>
								<td></td>
								<td align="right"><p class="defender" style="margin-right:15px;font-size: 19px;">Attacker Side:</p></td>
							</tr>
							<tr id="hitingdiv">
								<td><button class="mainbutton" onclick="dhit10()">10Hit</button></td>
								<td><button class="mainbutton" onclick="dhit50()">50Hit</button></td>
								<td></td>
								<td align="right"><button class="mainbutton" onclick="ahit10()">10Hit</button></td>
								<td align="right"><button class="mainbutton" onclick="ahit50()">50Hit</button></td>
								
							</tr>
							</table>
							
							<br><br>
							
				</div>
			</div>
			
		</div>	
		<div class="desni"></div>
    </div>
	
	
	
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/rChat.js"></script>
	<script src="messages.js"></script>
	
</body>
</html>	















