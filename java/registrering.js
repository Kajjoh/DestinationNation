var registrera = document.getElementById('registreraform'); //hämtar genom class Meny
registrera.addEventListener("submit", validateForm);

function validateForm (event) /*första funktionen*/
	{
		
		var Personnummer = document.regForm.prnr.value.trim();
		var Studentid= document.regForm.stid.value.trim();
		var Namn = document.regForm.namn.value.trim();
		var Mail = document.regForm.mail.value.trim();
		var Adress = document.regForm.adress.value.trim();
		var Ort = document.regForm.ort.value.trim();
		var Postnummer = document.regForm.pstnr.value.trim();
		var Losen = document.regForm.losen.value.trim();
		var Upprepalosen = document.regForm.upprepalosen.value.trim();
		
		if(Personnummer == "" || (Studentid == "") || (Namn == "") || (Mail == "") || (Adress == "")|| (Ort == "") || (Postnummer == "")|| (Losen == "")|| (Upprepalosen == "") ) /* Skapar en if-sats och om det är tomma fält skickas en alert ut med information*/
		{
			event.preventDefault(); /* om det i if-satsen inte stämmer skickas aldrig data, 
			man preventar default vilket är att skicka data*/
			alert('Du måste fylla i fältet för att skapa ett registrera dig');
		}
	}