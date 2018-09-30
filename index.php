<!DOCTYPE html>
<html lang="en" >
<head>
	<?php
		include_once('povezivanje.php');
	?>

	<meta charset="UTF-8">
	<title>E-Kingdom - Prijava</title>  
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="avatar.png">
</head>

<body background="bg3.png">

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
	  
	  
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="register.php" method="post">
          
          
            <div class="field-wrap">
              <label> Username<span class="req"></span></label>
              <input type="text" required autocomplete="off" name="username" />
            </div>
        
			<div class="field-wrap">
				<label> Password<span class="req"></span></label>
				<input type="password"required autocomplete="off" name="password"/>
			</div>

			<div class="field-wrap">
				<label> Email Address<span class="req"></span></label>
				<input type="email"required autocomplete="email" name="email"/>
			</div>
			
			<div class="field-wrap lines">
				<label class="kingdom"> Kingdom: <span class="req"></span></label>
				<select required name="kingdom" class="select">
				<?php $Upit      = "SELECT * FROM kingdom";
						$Rezultat  = mysqli_query($Veza, $Upit);
						while($Red = mysqli_fetch_assoc($Rezultat))
						{
							$id 		= $Red['id'];
							$kingdoms    = $Red['name'];
							echo "<option value='".$id."'>".$kingdoms."</option>";
						}
				?>
				</select>
			</div>
          
			<button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
		
		
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
		  
            <div class="field-wrap">
				<label> Username<span class="req"></span></label>
				<input type="text"required autocomplete="off" name="username" />
			</div>
          
			<div class="field-wrap">
				<label> Password<span class="req"></span></label>
				<input type="password"required autocomplete="off" name="password" />
			</div>
          
				<p class="forgot"><a href="#">Forgot Password?</a></p>
				<button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div>
      
</div> 
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
