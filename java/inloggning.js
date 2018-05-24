var inloggning = document.getElementById('inlogg'); 
inloggning.addEventListener("submit", validateInloggning);

function validateInloggning (event)
{
	var eMail= document.loggain.email.value.trim();
	var Losen = document.loggain.pword.value.trim();

	if(eMail == "" || (Losen == "")) /* Skapar en if-sats och om det är tomma fält skickas en alert ut med information*/
	{
		event.preventDefault(); /* om det i if-satsen inte stämmer skickas aldrig data, 
			man preventar default vilket är att skicka data*/
		alert('Du måste fylla i fältet för logga in');
	}
	else
	{
		alert('Nu har du loggat in');
		header('inloggning.php');
	}
}