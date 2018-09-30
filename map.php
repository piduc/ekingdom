<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once 'povezivanje.php';
		include 'info.php';
		include 'infomap.php';
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
</script>
	<link rel="stylesheet" href="./main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="./dropdown.css" type="text/css" media="screen, projection"/>

</head>
<body>

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
	.inforegion, .srednji {
		position: absolute;
		left: 20%;
	}
	.inforegion {
		z-index: 10;
		margin-top: 580px;
	}
	</style>
	<div class="glavni">
		<div class="levi"></div>
		<div id="inforegion" class="inforegion"></div>
		<div class="srednji" style="margin-right:50px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="0" height="30" ></svg>
				<object class="borders">
				<?php include_once 'mapa.php'; ?></object>
		</div>
		</div>
    </div>
	
	
	
	
	
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/rChat.js"></script>
	<script src="regioninfo.js"></script>
	
</body>
</html>	