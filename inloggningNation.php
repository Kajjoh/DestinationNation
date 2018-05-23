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
					<h2>Logga in som nation</h2>
				</div>	

				<!-- Här börjar formuläret. -->
				<form name="loggain" method="POST" action="process-data.php">
		
					<p class="boxes">
						<label for="prsnummer">Personnummer:<br></label>
						<input type="text" placeholder="ÅÅMMDD-XXXX" name="personnummer" id="personnummer">
					</p>	
					
					<p class="boxes">
						<label for="passwrd">Lösenord:<br></label>
						<input type="password" placeholder="..." name="pword" id="pw">
					</p>
					
					<p>
						<input type="submit" value="Logga In" id="logInBtn" class="button">
					</p>
					
				</form>	

				<p id="ingetKonto">Inte nation?* Logga in som <a href="inloggning.php" >student</a></p>

                <p class = "kontaktaNation">*Har du inte inloggningsuppgifterna vänligen kontakta din nation.</p>
				
			</div>
	</div>

			<?php
				include('html/sidfot.html');
			?>
	    	  
	</body>
</html>	
	  