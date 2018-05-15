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

		<!-- Det här är sidhuvudet, det ska ligga högst upp på varje sida. --> 
		<div id="sidhuvud">
        	<img src="images/headbackground.jpg" alt="Red board" width=100% height="40">
    	</div>

		<div id="header">
			<img src="images\logotest.jpg" class="logo"> 
    	</div>

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


		<!-- Här följer sidfoten som ska ligga på alla sidor. --> 
		<div id="sidfot">
        	<div class="nationsloggor">
            	<img src="images/logo-gh.jpg" alt="gh" width="100" height="100">
            	<img src="images/logo-goteborgs.jpg" alt="gote" width="75" height="85">
            	<img src="images/logo-gotlands.jpg" alt="got" width="90" height="90">
            	<img src="images/logo-norrlands.jpg" alt="norr" width="90" height="90">
            	<img src="images/logo-og.jpg" alt="og" width="85" height="90">
            	<img src="images/logo-smalands.jpg" alt="sma" width="100" height="90">
            	<img src="images/logo-snerikes.jpg" alt="sner" width="90" height="100">
            	<img src="images/logo-stockholms.jpg" alt="stock" width="90" height="90">
            	<img src="images/logo-uplands.jpg" alt="up" width="90" height="90">
            	<img src="images/logo-varmlands.jpg" alt="varm" width="90" height="90">
            	<img src="images/logo-vdala.jpg" alt="vd" width="90" height="90">
            	<img src="images/logo-vg.jpg" alt="vg" width="70" height="90">
            	<img src="images/logo-kal.png" alt="Kalmar" width="80" height="90">
        	</div>

        	<div id="footer">
            	<img src="images/headbackground.jpg" alt="Red board" width=100% height="20">
        	</div>
		</div>
		
		<script src="AnmalanEv.js" ></script>

	</body>
</html>