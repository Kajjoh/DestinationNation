<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="html/main.css" rel="stylesheet">
		<meta charset="utf-8">
    </head>
	
	
	<body>

		<?php
			include('html/sidhuvud.html');
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
				<form name="loggain" method="POST" action="login-process.php">
		
					<p class="boxes">
						<label for="email">Email:<br></label>
						<input type="text" placeholder="email@exempel.com" name="email" id="email">
					</p>	
					
					<p class="boxes">
						<label for="passwrd">Lösenord:<br></label>
						<input type="password" placeholder="..." name="pword" id="pw">
					</p>
					
					<p>
						<input type="submit" value="Logga In" id="logInBtn" class="button">
					</p>
					
				</form>	

				<p id="ingetKonto">Inget konto? Registrera dig <a href="registrering.php" >här</a></p>
				
			</div>
	</div>

			<?php
				include('html/sidfot.html');
			?>
	    	  
	</body>
</html>	
	  