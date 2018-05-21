<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="main.css" rel="stylesheet">
		<meta charset="utf-8">
    </head>
	
	
	<body>

		<?php
			include('sidhuvud.php');
		?>

		<!-- Här börjar innehållet. --> 
		<div id="rubrik">
			<h3>Välkommen till DestinationNation</h3>
		</div>	
	
			<div class="formular">
	
				<p class="rubrikInloggning">Logga in</p>

				<!-- Här börjar formuläret. -->
				<form name="loggain" method="POST" action="process-data.php">
		
					<p class="boxes">
						<label for="prsnummer">Personnummer:<br></label>
						<input type="text" placeholder="ÅÅMMDD-XXXX" name="personnummer">
					</p>	
					
					<p class="boxes">
						<label for="passwrd">Lösenord:<br></label>
						<input type="password" placeholder="..." name="pword">
					</p>
					
					<p>
						<input type="submit" value="Logga In" id="logInBtn" class="button">
					</p>
					
				</form>	
				
			</div>
			

			<?php
				include('sidfot.php');
			?>
	    	  
	</body>
</html>	
	  