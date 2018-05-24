var Anmalan = document.getElementById('AnmalanEv'); 
Anmalan.addEventListener("submit", validateAnmalan);

function validateAnmalan (event)
{
	var Namn = document.AnmalanEv.Namn.value.trim();
	var Mail = document.AnmalanEv.Mail.value.trim();
	var Sallskap = document.AnmalanEv.Sallskap.value.trim();
	var Allergi = document.AnmalanEv.Allergi.value.trim();

	if(Namn == "" || (Mail == "") || (Sallskap == "") || (Allergi == "")) /* Skapar en if-sats och om det är tomma fält skickas en alert ut med information*/
	{
		event.preventDefault(); /* om det i if-satsen inte stämmer skickas aldrig data, 
			man preventar default vilket är att skicka data*/
		alert('Du måste fylla i fältet för att anmäla dig till ett evenemang');
	}
	else
	{
		alert('Nu är du anmäld till evenemang');
		header('AnmalanEv.php');
	}
}