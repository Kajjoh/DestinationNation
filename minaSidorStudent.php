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
		
		<!-- I den här menyn väljer man vart man ska. Ska ligga högst upp på majoriteten av sidorna. -->
			<div class="huvudMeny">
				<ul>
				  <li id="listaMeny"><a href="startsidaStudent.html">Start</a></li>
				  <li style="float:right" id="listaMeny"><a href="inloggning.html">Logga ut</a></li>
				  <li style="float:right"id="listaMeny"><a href="minaSidorStudent.html">Mina sidor</a></li>
				  <li style="float:right" id="listaMeny"><a href="OmOss.html">Om Oss</a></li>
				</ul>
			</div>
		
		<!-- Här börjar innehållet.  -->
		<!-- Informationen som kommer ligga under personuppgifter till vänster på sidan. -->		
		
		<div id="persuppgMSS">
			<h4>Personuppgifter</h4>

			<p>Namn</p>
			<p>-------</p>
			<p>Personnummer</p>
			<p>-------</p>
			<p>Student-id</p>
			<p>-------</p>
			<p>E-mail</p>
			<p>-------</p>
			<p>Adress</p>
			<p>-------</p>
			<p>Ort</p>
			<p>-------</p>
			<p>Postnummer</p>
			<p>-------</p>
						
			<p>Byt lösenord</p>
			<p>-------</p>
			<p>Nytt lösenord</p>
			<p>-------</p>
			<p>Upprepa lösenord</p>
			<p>-------</p>

		</div>

		<div id="anmaldaEvMSS">
			<p> Här ska alla evenemang som studenten är anmäld till dyka upp.</p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>

		<div id="sparadeEvMSS">
			<p> Här ska alla evenemang man sparat dyka upp.</p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>


		<?php
			include('sidfot.html');
		?>
		
		
	    <script src="javaMeny.js"></script>		
	</body>
</html>
	