<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="main.css" rel="stylesheet">
		<meta charset="utf-8">
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
		
		
		<div id="divOmOss">
			<div id="rubrikOmOss">
				<h3>Om Oss</h3>
			</div>
		
			<div id="innehallOmOss">
				<p>
					DestinationNation erbjuder en tjänst för att öka spridningen av nationsevenemang vilket fynnar både 
					nationer och studenter. Som nation är du välkommen att publicera nya kommande evenemang och låta Uppsalas
					entusiastiska studenter anmäla sig till dem. Som student kommer du enklare kunna ta del av det fantastiska 
					studentlivet genom att leta bland alla evenemang på vår tjänst och hitta nya spännande aktiviteter att delta i.<br> 
					Vi hoppas att ni finner nöje av vår tjänst!
				</p>
			
				<h4> Kontakta oss!</h4>
				<p>
					Joel.Flink@DestinationNation.se <br>
					Marina.Bengtsson@DestinationNation.se<br>
					Kajsa.Johansson@DestinationNation.se<br>
					Mattias.Ekwall@DestinationNation.se
				</p>
				
				<h4>Policy och riktlinjer</h4>
				<p>
					GDPR <br>
					Användarcentrerat innehåll<br>
					Här ska vi skriva allt vi kan komma på om vår tjänst regler och riktlinjer. 
				</p>
			</div>
		</div>

		<?php
			include('sidfot.php');
		?>
		
	</body>
</html>
