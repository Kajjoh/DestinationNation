
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

		include('html/meny.html');
	?>

		<!--Här börjar innehållet på sidan-->
		<div class = "helaEvenemang">
		
			<div id="rubrikSkapaEv">
				<h3>Skapa Evenemang</h3>
			</div>

			<!--formular (byta namn på formulären?) har samma struktur som de andra formulären. -->
			<div class="formular">
			<form name="skapaEven" method="POST" action="skapaEvProcess.php" onsubmit="return (validateForm())">

					<label for="Titel">Titel</label><br>
						<input type="text" id="Titel" name="Titel"><br>

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

					Tid & Datum<br>
					<label for="Fran">Från</label><br>
						<input type="text" placeholder="--:--" id="Fran" name="Fran"><br>
					
					<label for="Till">Till</label><br>
						<input type="text" placeholder="--:--" id="Till" name="Till"><br>
					
					<label for="Datum">Datum</label><br>
						<input type="text" placeholder="xxxx-xx-xx" id="Datum" name="Datum"><br>

					<label for="Kravanmälan">Kräver detta evenemang en anmälan?</label><br>
					<select name="krav">
						<option value="nej">Nej</option>
						<option value="ja">Ja</option>
					</select><br>

					<label for="Beskrivning">Beskrivning</label><br>
						<textarea id="Beskrivning" name="Beskrivning" placeholder="Beskrivning av evenemang"></textarea><br>

					<input type="submit" value="Skapa evenemang!" id="skapaEvBtn">
				
			</form>
			</div>
		
		</div>

		<?php
			include('html/sidfot.html');
		?>
	
	</body>
</html>