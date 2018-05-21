<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>DestinationNation</title>
		<link href="main.css" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	
	<body>

	<?php
		include('sidhuvud.html');
	?>


		<!-- I den här menyn väljer man vart man ska. Ska ligga högst uppid="sidlankar" på majoriteten av sidorna. -->
		<div class="huvudMeny">
				<ul>
				  <li id="listaMeny"><a id="sidlankar" href="startsidaStudent.html">Start</a></li>
				  <li style="float:right" id="listaMeny"><a id="sidlankar" href="inloggning.html">Logga ut</a></li>
				  <li style="float:right"id="listaMeny"><a id="sidlankar" href="minaSidorStudent.html">Mina sidor</a></li>
				  <li style="float:right" id="listaMeny"><a id="sidlankar" href="OmOss.html">Om Oss</a></li>
				</ul>
			</div>

		<!--Här börjar innehållet på sidan-->
		<div class = "helaEvenemang">
		
			<div id="rubrikSkapaEv">
				<h3>Skapa Evenemang</h3>
			</div>

			<!--formular (byta namn på formulären?) har samma struktur som de andra formulären. -->
			<div class="formular">
			<form id = "skapaEven" method = "POST" action = "skapaEvProcess.php">

				<p class="boxes">
					<label for="Titel">Titel</label><br>
					<input type="text" id="Titel" name= "Titel"><br>
				</p>

				<p class="boxes">
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
						</select>
				</p>

				<p class="boxes">
					Tid & Datum<br>
					<label for="Från">Från</label><br>
					<input type="time" id="Från" name= "Från"><br>
					<label for="Till">Till</label><br>
					<input type="time" id="Till" name= "Till"><br>
					<label for="Tid">Tid</label><br>
					<input type="date" id="Tid" name= "Datum">
				</p>

				<p class="boxes">
					<label for="Kravanmälan">Kräver detta evenemang en anmälan?</label><br>
					<label for="Ja">Ja</label><label for="Nej">Nej</label><br>
					<input type="checkbox" id="Ja" name="Ja"><input type="checkbox" id="Nej" name="Nej"><br>
				</p>

				<p class="boxes">
					<label for="Beskrivning">Beskrivning</label><br>
					<textarea id="Beskrivning" name= "Beskrivning" placeholder="Beskrivning av evenemang"></textarea>
				</p>

				<p>
					<input type = "submit" value = "Skapa" id = "skapaEvBtn">
				</p>
				
			</form>
			</div>
		</div>

		<?php
			include('sidfot.html');
		?>
	
	</body>
</html>