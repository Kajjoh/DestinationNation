/*var skapaEv = document.getElementById('skapaEv'); //hämtar genom class Meny
skapaEv.addEventListener("submit", validateEv);*/

function validateEv (event) /*första funktionen*/
	{
		
		var Titel = document.skapaEven.Titel.value.trim();
		var Plats = document.skapaEven.plats.value.trim();
		var Fran = document.skapaEven.Fran.value.trim();
		var Till = document.skapaEven.Till.value.trim();
		var Datum = document.skapaEven.Datum.value.trim();
		var Beskrivning = document.skapaEven.Beskrivning.value.trim();
		
		if(Titel == "" || (Plats == "") || (Fran == "") || (Till == "") || (Datum == "")|| (Beskrivning == "") ) /* Skapar en if-sats och om det är tomma fält skickas en alert ut med information*/
		{
			event.preventDefault(); /* om det i if-satsen inte stämmer skickas aldrig data, 
			man preventar default vilket är att skicka data*/
			alert('Du måste fylla i alla fält för att kunna skapa ett evenemang');
		}
		else
		{
			alert("Ditt evenemang är nu skapat!");
		}
	}

