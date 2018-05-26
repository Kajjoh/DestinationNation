<?php
    session_start();
?>

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
		include ('html/menyMedlemmar.html');
	?>
	<div class = "helaPublicera">
		
		<div id="rubrikPublicera">
				<h3>Publicera Meddelande</h3>
		</div>

		<div class="formular">
			<form id ="publicera" name="publicera" method="POST" action="process/publiceraTjanst-process.php">

					<label for="Titel">Titel</label><br>
						<input type="text" id="Titel" name="Titel"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felmeddelande']))
							{
								echo $_SESSION['felmeddelande'];
								unset ($_SESSION['felmeddelande']);
							}
							?>
                    	</div><br>

                    	<label for="Tid">Tid</label><br>
						<input type="text" id="Tid" name="Tid" placeholder="--:--"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felTid']))
							{
								echo $_SESSION['felTid'];
								unset ($_SESSION['felTid']);
							}
							?>
                    	</div><br>
                    	<label for="Datum">Datum</label><br>
						<input type="text" id="Datum" name="Datum" placeholder="--:--"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felDatum']))
							{
								echo $_SESSION['felDatum'];
								unset ($_SESSION['felDatum']);
							}
							?>
                    	</div><br>
                    	<label for="Meddelande">Meddelande</label><br>
						<textarea id="Meddelande" name="Meddelande" placeholder="Publicering av meddelande"></textarea><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felmeddelande']))
							{
								echo $_SESSION['felmeddelande'];
								unset ($_SESSION['felmeddelande']);
							}
							?>
                    	</div><br>

                    	<input type="submit" value="Publicera meddelande!" id="publiceraBtn">
            </form>
		</div>
	</div>
		<?php
			include('html/sidfot.html');
		?>
		 <script src="java/publicera.js"></script>	
	</body>
</html>