<?php
	session_start();
?>
<DOCTYPE html>
<html>
	
	<head>
		<title>AnmalanEv</title>
		<meta charset="UTF-8">
		<link href="html/main.css" rel="stylesheet">
	</head>
	
	<body>

		<?php
			include('html/sidhuvud.html');

			include('html/menyStudent.html');
		?>

		<!-- Här börjar innehållssidan. --> 

		<div class="divAnmalan">

			<div id="rubrikAnmalan">
				<h2>Anmälan till "Gasque"</h2>
			</div>

			<!-- Här följer ett formulär för anmälan till evenemang. --> 
			<div class="formAnmalan">
				<form id="AnmalanEv" name="AnmalanEv" method="Post" action="process/anmalan-process.php" onsubmit="return (validateAnmalan())">
				
					<div class="formTop">
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
							
							else if (isset($_SESSION['redananmald']))
							{
								echo $_SESSION['redananmald'];
								unset($_SESSION['redananmald']);
							}
						?>
						</div>
					
						<p class="boxes"></p>
							<label for="Namn">Namn</label><br>
								<input type="text" name="Namn"><br>
								<?php
									if (isset($_SESSION['fyllinamn']))
									{
										echo $_SESSION['fyllinamn'];
										unset($_SESSION['fyllinamn']);
									}
								?>
						</p>
				
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
							
					</div>

					<div id="anmalanSkicka">
						<input type="submit" value="Skicka" id="submit">
					</div>
				
				</form>
			</div>
		</div> 


		<?php
			include('html/sidfot.html');
		?>
	</body>
	 <script src="java/AnmalanEv.js"></script>	
</html>