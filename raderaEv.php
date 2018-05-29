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
	</body>
			
			<div class="raderaEv">	
				<h2>Ta bort evenemang</h2>
				
				<form name="tabortmedlem" method="POST" action="process/raderaEveTjanste.php">
				
					<label for="evenemangsid">Evenemangs ID:<br></label>
					<input type="text" placeholder="****" name="evenemangsid" id="evenemangsid" class="radFält"><br>
					<div class="errorMessage">
					<?php
						session_start();
						if (isset($_SESSION['eveIDfel']))
						{
							echo $_SESSION['eveIDfel'];
							unset($_SESSION['eveIDfel']);
						}
						else if (isset($_SESSION['tomtfalt']))
						{
							echo $_SESSION['tomtfalt'];
							unset($_SESSION['tomtfalt']);
						}	
					?>
					</div><br>
	
					<input type="submit" value="Ta bort evenemang" id="logBtn" class="button">
				
				</form>
			</div>	


			<div class="redigeraEv">

				<h2>Redigera evenemang</h2>

				<form id ="redigeraEv" name="redigeraEven" method="POST" action="process/redigeraEveTjanste-process.php" onsubmit="return (validateEv())">
					
					<label for="evenemangsid">Evenemangs ID:<br></label>
					<input type="text" placeholder="****" name="evenemangsid" id="tabortevenemangnat"><br>
					
					<div class="errorMessage">
						<?php
							
							if (isset($_SESSION['eveIDfel2']))
							{
								echo $_SESSION['eveIDfel2'];
								unset($_SESSION['eveIDfel2']);
							}
							else if (isset($_SESSION['felbehorighet2']))
							{
								echo $_SESSION['felbehorighet2'];
								unset($_SESSION['felbehorighet2']);
							}
						
						?>
					</div><br>

					<label for="Titel">Titel</label><br>
						<input type="text" id="Titel" name="Titel"><br>
						
						<div class="errorMessage">
							<?php
								if (isset($_SESSION['tomtitel']))
								{
									echo $_SESSION['tomtitel'];
									unset ($_SESSION['tomtitel']);
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
							if (isset($_SESSION['tomplats']))
							{
								echo $_SESSION['tomplats'];
								unset ($_SESSION['tomplats']);
							}
							?>
                    	</div><br>

					Tid & Datum<br>
					<label for="Fran">Från</label><br>
						<input type="text" placeholder="--:--" id="Fran" name="Fran"><br>
						
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['tomtidFran']))
							{
								echo $_SESSION['tomtidFran'];
								unset ($_SESSION['tomtidFran']);
							}
							else if (isset($_SESSION['feltid1']))
							{
								echo $_SESSION['feltid1'];
								unset ($_SESSION['feltid1']);
							}
							?>
                    	</div><br>
					
					<label for="Till">Till</label><br>
						<input type="text" placeholder="--:--" id="Till" name="Till"><br>
						
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['tomtidTill']))
							{
								echo $_SESSION['tomtidTill'];
								unset ($_SESSION['tomtidTill']);
							}
							else if (isset($_SESSION['feltid2']))
							{
								echo $_SESSION['feltid2'];
								unset ($_SESSION['feltid2']);
							}
							?>
                    	</div><br>
					
					<label for="Datum">Datum</label><br>
						<input type="text" placeholder="xxxx-xx-xx" id="Datum" name="Datum"><br>
						
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['tomtdatum']))
							{
								echo $_SESSION['tomtdatum'];
								unset ($_SESSION['tomtdatum']);
							}
							else if (isset($_SESSION['feldatum']))
							{
								echo $_SESSION['feldatum'];
								unset ($_SESSION['feldatum']);
							}
							?>
                    	</div><br>

					<label for="Kravanmälan">Kräver detta evenemang en anmälan?</label><br>
						<select name="krav">
							<option value="Nej">Nej</option>
							<option value="Ja">Ja</option>
						</select><br>

					<br><label for="Beskrivning">Beskrivning</label><br>
						<textarea id="Beskrivning" name="Beskrivning" placeholder="Beskrivning av evenemang"></textarea><br>
						
						<div class="errorMessage">
							<?php
							if (isset($_SESSION['tombeskrivning']))
							{
								echo $_SESSION['tombeskrivning'];
								unset ($_SESSION['tombeskrivning']);
							}
							?>
                    	</div><br>

					<input type="submit" value="Redigera evenemang!" id="logBtn">
				
			</form>
			</div>
		</div>

		<div class="sidfotPlats">
			<?php
				include('html/sidfot.html');
			?>
		</div>
			
</html>