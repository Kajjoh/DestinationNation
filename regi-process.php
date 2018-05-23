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
	
	if (empty($mail) || !preg_match($mailmatch, $mail))
	{
		session_start();
		$_SESSION['emailmess'] = "Inkorrekt emailadress";
		header("Location: registrering.php");
	}
	
	else if ($mail == $emailfromdb)
	{
		header("Location: index.php");
	}
	else if (empty($name))
	{
		header("Location: index.php");
	}
	else if (empty($prnr) || !preg_match($persnrmatch, $prnr))
	{
		header("Location: index.php");
	}
	else if (empty($stid) || !preg_match($studidmatch, $stid))
	{
		header("Location: index.php");
	}
	else if (empty($adress))
	{
		header("Location: index.php");
	}
	else if (empty($ort))
	{
		header("Location: index.php");
	}
	else if (empty($pstnr) || !preg_match($pstnrmatch, $pstnr))
	{
		header("Location: index.php");
	}
	else if (empty($losen) || $losen != $upprepalosen)
	{
		header("Location: index.php");
	}

	else
	{
		$salt = genRandString();
		$hash = hash('sha256', ($salt . $losen));


		$sql = "INSERT INTO registrering (perNr, studID, namn, mail, adress, ort, postNr, losen, salt)
		VALUES ('$prnr', '$stid', '$name', '$mail', '$adress', '$ort', '$pstnr', '$hash', '$salt')";
		$conn->query($sql);
	}
	
	
		
	
	$conn->close();	
	include 'inloggning.php';
	
?>