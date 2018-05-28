

function validateInloggning ()
{
	var eMail= document.loggain.email.value.trim();
	var Losen = document.loggain.pword.value.trim();

	if(eMail == "" || (Losen == "")) /* Skapar en if-sats och om det är tomma fält skickas en alert ut med information*/
	{
		
		alert('Du måste fylla i fältet för logga in');
		
	}
	else
	{
		header('../loginStud.php');
	}
}