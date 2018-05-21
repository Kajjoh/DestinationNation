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

<DOCTYPE html>
<html>
	
	<head>
		<title>AnmalanEv</title>
		<meta charset="utf-8">
		<link href="main.css" rel="stylesheet">
	</head>
	
	<body>

		<?php
			include('sidhuvud.php');
		?>

		<!-- I den här menyn väljer man vart man ska. Ska ligga högst upp på majoriteten av sidorna. -->
    	<div class="huvudMeny">
			<ul>
			  <li id="listaMeny"><a href="startsidaStudent.html">Start</a></li>
			  <li style="float:right" id="listaMeny"><a href="inloggning.html">Logga ut</a></li>
			  <li style="float:right"id="listaMeny"><a href="minaSidorStudent.html">Mina sidor</a></li>
			  <li style="float:right" id="listaMeny"><a href="OmOss.html">Om Oss</a></li>
			</ul>
		</div>

		<!-- Här börjar innehållssidan. --> 

		<div class="divAnmalan">

			<div id="rubrikAnmalan">
				<h2>Anmälan till "Gasque"</h2>
			</div>

			<!-- Här följer ett formulär för anmälan till evenemang. --> 
			<div class="formAnmalan">
				<form id="AnmalanEv" method="Post" action="sparaAnmalan.php">
				
					<div class="formTop">
					
						<p class="boxes"></p>
							<label for="Namn">Namn</label><br>
								<input type="text" name="Namn"><br>
						</p>
				
						
						<label for="Mail">E-post</label><br>
							<input type="text" name="Mail"><br>
						
				
						<p class="boxes"></p>
							<label for="Kön">Kön</label><br>
							<select name="kon">
							  <option value="Man">Man</option>
							  <option value="Kvinna">Kvinna</option>
							</select>
						</p>

						<p class="boxes">
							<label for="Sallskap">Sällskap</label><br>
								<input type="text" name="Sallskap"><br>
						</p>
					</div>
					
					<div class="formLeft">
						
						<p class="boxes">
							<label for="Mat">Matpreferens</label><br>
							<select name="mat">
							  <option value="Inga">Inga preferenser</option>
							  <option value="Vegi">Vegetariskt</option>
							  <option value="Veg">Vegan</option>
							</select>
											
						</p>
					</div>

					<div class="formRight">
						<p class="boxes">
							<label for="Dryck">Måltidsdryck</label><br>
							<select name="dryck">
							  <option value="alko">Alkoholfritt</option>
							  <option value="vin">Vin till maten</option>
							  <option value="cider">Cider & Vin</option>
							  <option value="ol">Öl & Vin</option>
							</select>
						</p>
					</div>

					<div class="formBottom">

						<div id="formAllergi"> 
							<label for="Allegri">Allergi</label></br>
								<textarea placeholder="Skriv in eventuella allergier" name="Allergi"></textarea>
						</div>
						
						<div id="anmalanSkicka">
							<input type="submit" value="Skicka" id="submit">
						</div>
							
					</div>
				
				</form>
			</div>
		</div> 


		<?php
			include('sidfot.php');
		?>
		
		<script src="AnmalanEv.js" ></script>

	</body>
</html>