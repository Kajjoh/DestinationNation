<?php
    session_start();
	if (!isset($_SESSION['nation']))
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

		include('html/menyNation.html');
	?>

		<!--Här börjar innehållet på sidan-->
		<div class = "helaEvenemang">
		
			<div id="rubrikSkapaEv">
				<h2>Skapa Evenemang</h2>
			</div>

			<!--formular (byta namn på formulären?) har samma struktur som de andra formulären. -->
			<div class="formular">
			<form id ="skapaEv" name="skapaEven" method="POST" action="process/skapaEv-process.php" onsubmit="return (validateEv())">

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

					<label for="Typ">Typ</label><br>
					<select name="cars">
						<option value="Pub">Pub</option>
						<option value="Klubb">Klubb</option>
						<option value="Lunch">Lunch</option>
						<option value="Frukost">Frukost</option>
						<option value="Restaurang">Restaurang</option>
						<option value="Brunch">Brunch</option>
						<option value="Släpp">Släpp</option>
						<option value="Gasque">Gasque</option>
						<option value="Konsert">Konsert</option>
						<option value="Övrigt">Övrigt</option>
					</select><br>

					<label for="plats">Plats</label><br>
						<input type="text" id="plats" name="plats"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felmeddelande']))
							{
								echo $_SESSION['felmeddelande'];
								unset ($_SESSION['felmeddelande']);
							}
							?>
                    	</div><br>

					Tid & Datum<br>
					<label for="Fran">Från</label><br>
						<input type="text" placeholder="--:--" id="Fran" name="Fran"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felTid']))
							{
								echo $_SESSION['felTid'];
								unset ($_SESSION['felTid']);
							}
							?>
                    	</div><br>
					
					<label for="Till">Till</label><br>
						<input type="text" placeholder="--:--" id="Till" name="Till"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felTid2']))
							{
								echo $_SESSION['felTid2'];
								unset ($_SESSION['felTid2']);
							}
							?>
                    	</div><br>
					
					<label for="Datum">Datum</label><br>
						<input type="text" placeholder="xxxx-xx-xx" id="Datum" name="Datum"><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felDatum']))
							{
								echo $_SESSION['felDatum'];
								unset ($_SESSION['felDatum']);
							}
							?>
                    	</div><br>

					<label for="Kravanmälan">Kräver detta evenemang en anmälan?</label><br>
					<select name="krav">
						<option value="Nej">Nej</option>
						<option value="Ja">Ja</option>
					</select><br>

					<label for="Beskrivning">Beskrivning</label><br>
						<textarea id="Beskrivning" name="Beskrivning" placeholder="Beskrivning av evenemang"></textarea><br>
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['felmeddelande']))
							{
								echo $_SESSION['felmeddelande'];
								unset ($_SESSION['felmeddelande']);
							}
							?>
                    	</div><br>

					<input type="submit" value="Skapa evenemang!" id="skapaEvBtn">
				
			</form>
			</div>
		
			
		</div>

		<?php
			include('html/sidfot.html');
		?>
		
	</body>
	 <script src="java/skapaEv.js"></script>	
</html>