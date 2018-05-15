<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="main.css" rel="stylesheet">
		<meta charset="utf-8">
    </head>
	
	
	<body>

		<!-- Det här är sidhuvudet, det ska ligga högst upp på varje sida. -->
		<div id="sidhuvud">
			<img src="headbackground.jpg" alt="Red board" width=100% height="40">
		</div>

		<div id="header">
			<img src="images\logotest.jpg" class="logo"> 
    	</div>

		<!-- Här börjar innehållet. --> 
		<div id="rubrik">
			<h3>Välkommen till DestinationNation</h3>
		</div>	
	
			<div class="formular">
	
				<p class="rubrikInloggning">Logga in</p>

				<!-- Här börjar formuläret. -->
				<form name="loggain" method="POST" action="process-data.php">
		
					<p class="boxes">
						<label for="prsnummer">Personnummer:<br></label>
						<input type="text" placeholder="ÅÅMMDD-XXXX" name="personnummer">
					</p>	
					
					<p class="boxes">
						<label for="passwrd">Lösenord:<br></label>
						<input type="password" placeholder="..." name="pword">
					</p>
					
					<p>
						<input type="submit" value="Logga In" id="logInBtn" class="button">
					</p>
					
				</form>	
				
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
	    	  
	</body>
</html>	
	  