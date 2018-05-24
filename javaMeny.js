var Meny = document.getElementById('Meny'); //hämtar genom class Meny
Meny.addEventListener("Click", validateForm);

function validateForm () /*första funktionen*/
	{
		var Loggaut = document.Meny.LoggaUt.value.trim(); /*Hämtar det värdet som skrivs in i fältet och trimmar det som sedan läggs in i pName*/
		console.log(LoggaUt);/*ett sätt att se i consolen vad som skrivs in i olika fält*/
	}


	//skapar nationsid i nationer och som FK  i evenemang och matchar på det
	$value1 = "SELECT * FROM evenemang WHERE nationsID = 6"
