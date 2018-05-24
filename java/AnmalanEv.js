var Anmalan = document.getElementById('AnmalanEv'); 
Anmalan.addEventListener("submit", validateAnmalan);

function validateAnmalan (event)
{
	var Namn = document.AnmalanEv.Namn.value;
	var Mail = document.AnmalanEv.Mail.value;
	var Sallskap = document.AnmalanEv.Sallskap.value;
	var Allergi = document.AnmalanEv.Allergi.value;


	if(Namn == "" || (Mail == "")) /* Skapar en if-sats och om det är tomma fält skickas en alert ut med information*/
	{
		event.preventDefault(); /* om det i if-satsen inte stämmer skickas aldrig data, 
			man preventar default vilket är att skicka data*/
		alert('Du måste fylla i namn för att kunna anmäla dig till ett evenemang');
	}
}

}