<?php
	
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "projekt";
	
	
	// Create connection to database
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	
	// Check connection with database
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}

	function genRandString($length = 25) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randString = '';
    for ($i = 0; $i < $length; $i++) {
        $randString .= $chars[rand(0, $charsLength - 1)];
    }
    return $randString;
	}	
		
		
	//allt vi hämtar från formuläret
	$prnr = mysqli_real_escape_string($conn, trim($_POST['prnr']));
	$stid = mysqli_real_escape_string($conn, trim($_POST['stid']));
	$name = mysqli_real_escape_string($conn, trim($_POST['namn']));
	$mail = mysqli_real_escape_string($conn, trim($_POST['mail']));
	$adress = mysqli_real_escape_string($conn, trim($_POST['adress']));
	$ort = mysqli_real_escape_string($conn, trim($_POST['ort']));
	$pstnr = mysqli_real_escape_string($conn, trim($_POST['pstnr']));
	$losen = mysqli_real_escape_string($conn, trim($_POST['losen']));
	$upprepalosen = mysqli_real_escape_string($conn, trim($_POST['upprepalosen']));
	
	
	//matchningsmönster för validering
	$mailmatch = "/.+@.+\..+/";
	$persnrmatch = "/([0-9]{6})-([0-9]{4})/";
	$studidmatch = "/[0-9]{8}/";
	$pstnrmatch = "/[0-9]{5}/";
	
	
	
	//Hämtar ut email från databasen kommer användas sen för att se till att man inte kan använda en redan existerand email
	$findusermail = "SELECT mail FROM registrering WHERE mail = '$mail'";
	$retrievemailfromdb = mysqli_query($conn, $findusermail);
	$emailfromdb = "";
	while ($row = mysqli_fetch_assoc($retrievemailfromdb))
	{
		$emailfromdb = $row['mail'];
	}
	
	if (empty($prnr) || !preg_match($persnrmatch, $prnr))
	{
		session_start();
		$_SESSION['ogiltigtprnr'] = "Ogiltigt personnummer";
		header("Location: ../registrering.php");
	}
	
	else if (empty($stid) || !preg_match($studidmatch, $stid))
	{
		session_start();
		$_SESSION['ogiltigtstdid'] = "Ogiltigt student-id";
		header("Location: ../registrering.php");
	}
	
	else if (empty($name))
	{
		session_start();
		$_SESSION['tomtnamn'] = "Var god fyll i ditt namn";
		header("Location: ../registrering.php");
	}
	
	else if (empty($mail) || !preg_match($mailmatch, $mail))
	{
		session_start();
		$_SESSION['emailmess'] = "Inkorrekt emailadress";
		header("Location: ../registrering.php");
	}
	
	else if ($mail == $emailfromdb)
	{
		session_start();
		$_SESSION['upptagenemail'] = "Emailadressen används redan";
		header("Location: ../registrering.php");
	}
	
	else if (empty($adress))
	{
		session_start();
		$_SESSION['tomadress'] = "Var god fyll i din adress";
		header("Location: ../registrering.php");
	}
	else if (empty($ort))
	{
		session_start();
		$_SESSION['tomort'] = "Var god fyll i din ort";
		header("Location: ../registrering.php");
	}
	else if (empty($pstnr) || !preg_match($pstnrmatch, $pstnr))
	{
		session_start();
		$_SESSION['ogiltigtpstnr'] = "Ogiltigt postnummer";
		header("Location: ../registrering.php");
	}
	else if (empty($losen))
	{
		session_start();
		$_SESSION['tomtlosen'] = "Var god fyll i lösenord";
		header("Location: ../registrering.php");
	}
	else if ($losen != $upprepalosen)
	{
		session_start();
		$_SESSION['losenmatch'] = "Lösenorden måste matcha";
		header("Location: ../registrering.php");
	}

	else
	{
		$salt = genRandString();
		$hash = hash('sha256', ($salt . $losen));


		$sql = "INSERT INTO registrering (perNr, studID, namn, mail, adress, ort, postNr, losen, salt)
		VALUES ('$prnr', '$stid', '$name', '$mail', '$adress', '$ort', '$pstnr', '$hash', '$salt')";
		$conn->query($sql);

		header('Location: loginStud.php');
	}
	
	
		
	
	$conn->close();	
	
	
?>