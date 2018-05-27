<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="html/main.css" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	
	<body>
	
		<?php
			include('html/sidhuvud.html');

			include('html/menyNation.html');
		?>
				
		<!-- Här börjar innehållssidan. --> 
		
		<div id="divOmOss">
			<div id="rubrikOmOss">
				<h3>Om Oss</h3>
			</div>
			<?php
			include('process/OmOss-process.php');
			?>
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
					<h5 class="h5OmOss">De personuppgifter som hanteras är studentens: </h5>
					•	Personnummer <br>
					•	Namn <br>
					•	Adress <br>
					•	E-mail <br>

					<br>
					Studentens personuppgifter sparas så länge studenten har ett konto hos oss. När ett konto raderas, då försvinner även studentens sparade data. <br>
					

					<h4>Vid användning av vår tjänst gäller följande regler:</h4>
					<h5 class="h5OmOss">Vid meddelanden: </h5>
					•	Inga hot <br>
					•	Inga kränkande uttalanden så som hotfulla, sexistiska eller rasistiska kommentarer<br>
					<h5 class="h5OmOss">Publicering av bilder: </h5>
					•	Bilder får ej uppvisa kränkande innehåll såsom våld, nakenhet, hets mot folkgrupp<br>
					<br>
				
					<p id="OBS">Avvikande från dessa regler kan få allvarliga konsekvenser. Då ingen kan vara anonym på vårat forum är du som person ansvarig för det som utförs som inloggad användare. </p>

				</p>
			</div>
		</div>

		<?php
			include('html/sidfot.html');
		?>
		
	</body>
</html>