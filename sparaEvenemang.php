<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>

    <head>
        <title>DestinationNation</title>
        <link rel="stylesheet" href="html/main.css">
        <meta charset="UTF-8">
    </head>
    
    <body>
	
	<?php
        include('html/sidhuvud.html');

        include('html/menyTillbakaStudent.html');
    ?>
	
		<div class="formular" id="sparaEv">
	
			
			<h2>Spara Evenemang</h2>
			<div class="midForm">			
			<!-- Här börjar formuläret. -->
				<form name="sparaevenemang" method="POST" action="process/sparaev-process.php">
		
				
					<label for="evenemang">Evenemangs ID:<br></label>
					<input type="text" placeholder="..." name="sparaEvenemang" id="sparaEvenemang"><br>
					<div class="errorMessage">
						<?php
							
							if (isset($_SESSION['tomtevid']))
							{
								echo $_SESSION['tomtevid'];
								unset($_SESSION['tomtevid']);
							}
							
							else if (isset($_SESSION['idfinnsej']))
							{
								echo $_SESSION['idfinnsej'];
								unset($_SESSION['idfinnsej']);
							}
							else if (isset($_SESSION['redansparat']))
							{
								echo $_SESSION['redansparat'];
								unset($_SESSION['redansparat']);
							}
							
						?>
					</div>		<br>			
					<input type="submit" value="Spara evenemang" id="sparEv" class="button">
				
				</form>
			</div>
		</div>
	<?php
		include('html/sidfot.html');
	?>	
		
	</body>
</html>	