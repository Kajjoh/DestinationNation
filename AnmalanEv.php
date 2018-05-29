<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
		header("Location: index.php");
	}
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
				<h2>Anmälan till Evenemang</h2>
			</div>

			<!-- Här följer ett formulär för anmälan till evenemang. --> 
			<div class="formAnmalan">
				<form id="AnmalanEv" name="AnmalanEv" method="Post" action="process/anmalan-process.php" onsubmit="return (validateAnmalan())">
				
					<div class="formTop">
						<label for="evenemang">Evenemangs ID:<br></label>
						<input type="text" placeholder="..." name="sparaEvenemang" id="sparaEvenemang" class="boxes"><br>
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
								<input type="text" name="Namn" class="boxes"><br>
								<?php
									if (isset($_SESSION['fyllinamn']))
									{
										echo $_SESSION['fyllinamn'];
										unset($_SESSION['fyllinamn']);
									}
								?>
						</p>
				
							<label for="Kön">Kön</label><br>
							<select name="kon">
							  <option value="Man">Man</option>
							  <option value="Kvinna">Kvinna</option>
							</select><br>

							<label for="Sallskap">Sällskap</label><br>
								<input type="text" name="Sallskap" class="boxes"><br>

					</div>
					
					<div class="formLeft">
						
						<p class="boxes">
							<label for="Mat">Matpreferens</label><br>
							<select name="mat">
							  <option value="Inga pref">Inga preferenser</option>
							  <option value="Vegi">Vegetariskt</option>
							  <option value="Vegan">Vegan</option>
							</select>
											
						</p>
					</div>

					<div class="formRight">
						<p class="boxes">
							<label for="Dryck">Måltidsdryck</label><br>
							<select name="dryck">
							  <option value="Alkoholfritt">Alkoholfritt</option>
							  <option value="Vin">Vin till maten</option>
							  <option value="Cider">Cider & Vin</option>
							  <option value="Öl">Öl & Vin</option>
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