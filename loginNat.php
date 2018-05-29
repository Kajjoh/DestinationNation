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
					<h2>Logga in som nation</h2>
				</div>	

				<!-- Här börjar formuläret. -->
				<form name="loggain" method="POST" action="process/loginNat-process.php">
		
					<div class="loginBox">
						<label for="email">Mejladress:<br></label>
						<input type="text" placeholder="nation@exempel.com" name="email" id="email" class="boxes">
					</div>
					<div class="errorMessage">
                        <?php
                        if (isset($_SESSION['noUser']))
                        {
                            echo $_SESSION['noUser'];
                            unset ($_SESSION['noUser']);
                        }
                        ?>
                    </div><br>	
					
					<div class="loginBox">
						<label for="pw">Lösenord:<br></label>
						<input type="password" placeholder="..." name="pw" id="pw" class="boxes">
					</div>
					<div class="errorMessage">
                        <?php
                            if (isset($_SESSION['password']))
                            {
                                echo $_SESSION['password'];
                                unset ($_SESSION['password']);
                            }
                        ?>
                    </div><br>
					
					<p>
						<input type="submit" value="Logga In" id="logInBtn" class="button">
					</p>
					
				</form>	

				<p id="ingetKonto">Inte nation?* Logga in som <a href="loginStud.php" >student</a></p>

                <p class = "kontaktaNation">*Har du inte inloggningsuppgifterna vänligen kontakta din nation.</p>
				
			</div>

			<?php
				include('html/sidfot.html');
			?>
	    	  
	</body>
</html>	
	  