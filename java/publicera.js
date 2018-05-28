/*var publicera = document.getElementById('publicera');
publicera.addEventListener("submit", validatepub);*/

function validatepub()
{
	var Titel = document.publicera.Titel.value.trim();
	var Tid = document.publicera.Titel.value.trim();
	var Datum = document.publicera.Datum.value.trim();
	var Meddelande = document.publicera.Meddelande.value.trim();
	var tidmatch = Tid.match (/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/);

	if(Titel == "" || (Tid == "") || (Datum == "") || (Meddelande==""))
	{
		
		alert('Vänligen fyll i alla fält för publicera ett meddelande');
	}
	else
	{
		alert('Ett meddelande är nu skapat');
	}
}