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
			<div id="sparaevform">			
			<!-- Här börjar formuläret. -->
				<form name="sparaevenemang" method="POST" action="process/sparaev-process.php">
		
				
					<label for="evenemang">Evenemangs ID:<br></label>
					<input type="text" placeholder="..." name="sparaEvenemang" id="sparaEvenemang"><br>
					<div class="errorMessage">
						<?php
							session_start();
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
						?>
					</div>					
					<input type="submit" value="Spara evenemang" id="sparEv" class="button">
				
				</form>
			</div>
		</div>
	<?php
		include('html/sidfot.html');
	?>	
		
	</body>
</html>	