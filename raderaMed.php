<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location: index.php");
	}
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
			include('html/menyraderaMedEv.html');

			<div id="sessionMessage">
			<?php
			if (!(isset($_SESSION['admin'])))
					{
				header('Location: index.php');
			}
			?>
	?>
	</body>
	
		<div class="formularMed" id="hanteraStudent">
	
			
			<h2>Ta bort student</h2>
			<div id="tabortstudtjanste">			
			<!-- Här börjar formuläret. -->
				<form name="tabortmedlem" method="POST" action="process/raderaMed-process.php">
		
				
					<label for="email">Email:<br></label>
					<input type="text" placeholder="email@exempel.com" name="email" id="email" class="radFält"><br>
					<div class="errorMessage">
						<?php
							
							if (isset($_SESSION['emailfel']))
							{
								echo $_SESSION['emailfel'];
								unset($_SESSION['emailfel']);
							}
							else if (isset($_SESSION['emailfel2']))
							{
								echo $_SESSION['emailfel2'];
								unset($_SESSION['emailfel2']);
							}
						?>
					</div>	<br>				
					<input type="submit" value="Ta bort sudent" id="raderaStud" class="button">
				
				</form>
			</div>
		</div>	
		
		<div class="formularMed" id="hanteraNation">
	
			
			<h2>Ta bort nation</h2>
			<div id="tabortNattjanste">			
			<!-- Här börjar formuläret. -->
				<form name="tabortnation" method="POST" action="process/raderaNat-process.php">
		
				
					<label for="email">Nation:<br></label>
					<input type="text" placeholder="..." name="radNat" id="radNat" class="radFält"><br>
					<div class="errorMessage">
						<?php
							
							if (isset($_SESSION['felnation']))
							{
								echo $_SESSION['felnation'];
								unset($_SESSION['felnation']);
							}
							else if (isset($_SESSION['ingennation']))
							{
								echo $_SESSION['ingennation'];
								unset($_SESSION['ingennation']);
							}
						?>
					</div>	<br>				
					<input type="submit" value="Ta bort nation" id="raderaNat" class="button">
				
				</form>
			</div>
		</div>	

		<?php
			include('html/sidfot.html');
		?>
				
</html>	