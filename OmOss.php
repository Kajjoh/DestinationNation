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
			  	<li id="listaMeny"><a id="sidlankar" href="startsidaStudent.html">Start</a></li>
			  	<li style="float:right" id="listaMeny"><a id="sidlankar" href="inloggning.html">Logga ut</a></li>
			  	<li style="float:right"id="listaMeny"><a id="sidlankar" href="minaSidorStudent.html">Mina sidor</a></li>
				<li style="float:right" id="listaMeny"><a id="sidlankar" href="OmOss.html">Om Oss</a></li>
			</ul>
		</div>
		
		<!-- Här börjar innehållssidan. --> 
		
		
		<div id="divOmOss">
			<div id="rubrikOmOss">
				<h3>Om Oss</h3>
			</div>
		
			<div id="innehallOmOss">
				<p>
					DestinationNation erbjuder en tjänst för att öka spridningen av nationsevenemang vilket gynnar både 
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
					Vi på DestinationNation har beslutat att följa GDPRs riktlinjer:
					<br>
					<br>
					Den nya dataskyddsförordningen, GDPR innebär att en förteckning finns på alla dem uppgifter som hanteras, bl.a. information om vad uppgifterna används till, vilka kategorier av uppgifter och personer som förekommer. 
					<br>
					<br>
					De personuppgifter som hanteras är studentens: <br>
					•	Personnummer <br>
					•	Namn <br>
					•	Adress <br>
					•	E-mail <br>

					<br>
					Studentens personuppgifter sparas så länge studenten har ett konto hos oss. När ett konto raderas, då försvinner även studentens sparade data. <br>
					<br>
					Vid användning av vår tjänst gäller följande regler:<br>

					<br>
					Vid meddelanden: <br>
					•	Inga hot <br>
					•	Inga kränkande uttalanden så som hotfulla, sexistiska eller rasistiska kommentarer <br>
					<br>
					Publicering av bilder: <br>
					•	Bilder får ej uppvisa kränkande innehåll såsom våld, nakenhet, hets mot folkgrupp <br>
					<br>
					Avvikande får dessa regler kan få allvarliga konsekvenser. Då ingen kan vara anonym på vårat forum är du som person ansvarig för det som utförs som inloggad användare. 

				</p>
			</div>
		</div>

		<?php
			include('sidfot.html');
		?>
		
	</body>
</html>
