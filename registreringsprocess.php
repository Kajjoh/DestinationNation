<?php
	$host = "localhost";
	$uname = "root";
	$pass = "";
	$dbname = "projekt";
  
    $connection = new mysqli($host, $uname, $pass, $dbname);
	if ($connection->connect_error)
	{  
		die("Connection failed: " . $connection->connect_error);
	}
	//skapar variablerna för det vi skickar in
	$persnr = mysqli_real_escape_string($connection, trim($_POST['personnummer']));
	$stdId = mysqli_real_escape_string($connection, trim($_POST['sId']));
	$foefNamn = mysqli_real_escape_string($connection, trim($_POST['namn']));
	$emejl = mysqli_real_escape_string($connection, trim($_POST['email']));
	$adress = mysqli_real_escape_string($connection, trim($_POST['adress']));
	$ort = mysqli_real_escape_string($connection, trim($_POST['ort']));
	$pstnr = mysqli_real_escape_string($connection, trim($_POST['postnummr']));
	$pw = mysqli_real_escape_string($connection, trim($_POST['userpass']));
	$repeatpw = mysqli_real_escape_string($connection, trim($_POST['repeatpass']));
	
	//skapar regex pregmatch för valideringen
	$emailmatch = "/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/";
	$pernrmatch = "/^[0-9]{10}$/";
	$stdIdmatch = "/^[0-9]{8}$/";
	$pstnrmatch = "/^[0-9]{5}$/";
	
	//valideringen
	if (empty($persnr) || !preg_match($pernrmatch, $persnr))
	{
		echo 'inkorrekt personnummer';
		die();
	}
	else if (empty($emejl) || !preg_match($emailmatch, $emejl))
	{
		echo 'inkorrekt emailadress';
		die();
		
	}
	else if (empty($foefNamn))
	{
		echo 'Namnet kan inte vara tomt';
		die();
		
	}
	else if (empty($stdId) || !preg_match($stdIdmatch, $stdId))
	{
		echo 'Inkorrekt studentid';
		die();
	}
	else if (empty($adress))
	{
		echo 'vänligen fyll i adress';
		die();
	}
	else if (empty($ort))
	{
		echo 'vänligen fyll i ort';
		die();
	}
	else if (empty($pstnr) || !preg_match($pstnrmatch, $pstnr))
	{
		echo 'inkorrekt postnummer';
		die();
	}
	else if (empty($pw) || $pw != $repeatpw)
	{
		echo 'lösenorden får inte vara tomma och måste matcha';
		die();
	}
	else
	{
		
		$sql = "INSERT INTO registrering (perNr, studID, namn, mail, adress, ort, postNr)
		VALUES ('$persnr', '$stdId', '$foefNamn', '$emejl', $adress', '$ort', '$pstnr')";
		$connection->query($sql);
		echo 'tack för din registrering';
	}

	$connection->close();
	

	
?>