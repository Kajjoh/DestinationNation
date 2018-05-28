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
			include('html/menyraderaMedEv.html');
	?>
	</body>
	
		<div class="formular" id="hanteraMedlem">
	
			<div class="rubrikMedlem">
					<h2>Ta bort medlem</h2>
			</div>	

				<!-- Här börjar formuläret. -->
			<form name="tabortmedlem" method="POST" action="process/raderaMed-process.php">
		
				<p class="boxes">
					<label for="email">Email:<br></label>
					<input type="text" placeholder="email@exempel.com" name="email" id="email"><br>
					<?php
						session_start();
						if (isset($_SESSION['emailfel']))
							{
								echo $_SESSION['emailfel'];
								unset($_SESSION['emailfel']);
							}
					?>
						
				</p>	
					
					
				<p>
					<input type="submit" value="Ta bort medlem" id="logInBtn" class="button">
				</p>
				
			</form>
			
		</div>	
	
				
</html>	