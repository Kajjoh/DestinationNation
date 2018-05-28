/*var publicera = document.getElementById('publicera');
publicera.addEventListener("submit", validatepub);*/

function validatepub()
{
	var Titel = document.publicera.Titel.value.trim();
	var Tid = document.publicera.Titel.value.trim();
	var Datum = document.publicera.Datum.value.trim();
	var Meddelande = document.publicera.Meddelande.value.trim();

	if(Titel == "" || (Tid == "") || (Datum == "") || (Meddelande==""))
	{
		event.preventDefault();
		alert('Vänligen fyll i alla fält för publicera ett meddelande');
	}
	else
	{
		alert('Ett meddelande är nu skapat');
	}
}