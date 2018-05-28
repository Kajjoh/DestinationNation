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
		include('html/menyraderaMedEv.html');
	?>
	<div class = "helaPublicera">
		
		<div id="rubrikPublicera">
				<h2>Publicera Meddelande</h2>
		</div>

		<div class="formular">
			<form id ="publicera" name="publicera" method="POST" action="process/publiceraTjanst-process.php" onsubmit="return(validatepub())">

					<label for="Titel">Titel</label><br>
						<input type="text" id="Titel" name="Titel" class="regFält"><br>
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
						<input type="text" id="Tid" name="Tid" placeholder="--:--" class="regFält"><br>
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
						<input type="text" id="Datum" name="Datum" placeholder="xxxx-xx-xx" class="regFält"><br>
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
						<textarea id="Meddelande" name="Meddelande" placeholder="Publicering av meddelande" class="regArea"></textarea><br><br>
						

                    	<input type="submit" value="Publicera meddelande!" id="publiceraBtn">
            </form>
		</div>
	</div>

		<?php
			include('html/sidfot.html');
		?>

	</body>
	<script src="java/publicera.js"></script>	
</html>