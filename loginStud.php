<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="html/main.css" rel="stylesheet">
		<meta charset="UTF-8">
    </head>
	
	
	<body>

		<?php
			include('html/sidhuvud.html');
			include('html/menyTillbaka.html');
		?>

		<!-- Här börjar innehållet. --> 
	
		<div id="huvudRubrikInloggning">
			<h3>Välkommen till DestinationNation</h3>
		</div>	
	
			<div class="formular" id="inloggning">
	
				<div class="rubrikInloggning">
					<h2>Logga in som student</h2>
				</div>	

				<!-- Här börjar formuläret. -->
				<form id="inlogg" name="loggain" method="POST" action="process/loginStud-process.php">
		
					<p class="boxes">
						<label for="email">Email:<br></label>
						<input type="text" placeholder="email@exempel.com" name="email" id="email"><br>
						<div class="errorMessage">
						<?php
							if (isset($_SESSION['felmail']))
							{
								echo $_SESSION['felmail'];
								unset($_SESSION['felmail']);
							}
						?>
						</div>
					</p>	
					
					<p class="boxes">
						<label for="passwrd">Lösenord:<br></label>
						<input type="password" placeholder="..." name="pword" id="pw"><br>
						<?php
							if (isset($_SESSION['fellosen']))
							{
								echo $_SESSION['fellosen'];
								unset($_SESSION['fellosen']);
							}
						?>
					</p>
					
					<p>
						<input type="submit" value="Logga In" id="logInBtn" class="button">
					</p>
					
				</form>	
				<p id="Felkund">Inte student? Logga in som <a href="loginnat.php" >nation</a></p>

				<p id="ingetKonto">Inget konto? Registrera dig <a href="registrering.php" >här</a></p>
				
			</div>
	</div>

			<?php
				include('html/sidfot.html');
			?>
	    	  
	</body>
	<script src="java/inloggning.js"></script>	
</html>	
	  