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
			include('html/menyMedlemmar.html');
	?>
	</body>
	
		<div class="formular" id="hanteraMedlem">
	
			<div class="rubrikTjanstEve">
					<h2>Ta bort evenemang</h2>
			</div>	

				<!-- Här börjar formuläret. -->
			<form name="tabortmedlem" method="POST" action="process/raderaEveTjanste.php">
		
				<p class="boxes">
					<label for="evenemangsid">Evenemangs ID:<br></label>
					<input type="text" placeholder="****" name="evenemangsid" id="evenemangsid"><br>
					<?php
						session_start();
						if (isset($_SESSION['eveIDfel']))
							{
								echo $_SESSION['eveIDfel'];
								unset($_SESSION['eveIDfel']);
							}
					?>
						
				</p>	
					
					
				<p>
					<input type="submit" value="Ta bort evenemang" id="logInBtn" class="button">
				</p>
				
			</form>
			
		</div>	
	
				
</html>