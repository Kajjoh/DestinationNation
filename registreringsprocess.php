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
	$address = mysqli_real_escape_string($connection, trim($_POST['adress']));
	$oort = mysqli_real_escape_string($connection, trim($_POST['ort']));
	$pstnr = mysqli_real_escape_string($connection, trim($_POST['postnummr']));
	
	//skapar regex pregmatch för valideringen
	$emailmatch = "/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/";
	$pernrmatch = "/^([0-9]{6})-([0-9]{4})$/";
	$stdIdmatch = "/^[0-9]{8}$/";
	$pstnrmatch = "/^[0-9]{5}$/";
	
	//valideringen
	if (empty($persnr) || !preg_match($pernrmatch, $persnr))
	{
		echo 'inkorrekt personnummer';
		die();
	}
	if (empty($emejl) || !preg_match($emailmatch, $emejl))
	{
		echo 'inkorrekt emailadress';
		die();
		
	}
	if (empty($foefNamn))
	{
		echo 'Namnet kan inte vara tomt';
		die();
		
	}
	if (empty($stdId) || !preg_match($stdIdmatch, $stdId))
	{
		echo 'Inkorrekt studentid';
		die();
	}
	if (empty($address))
	{
		echo 'vänligen fyll i adress';
		die();
	}
	if (empty($oort))
	{
		echo 'vänligen fyll i ort';
		die();
	}
	if (empty($pstnr) || !preg_match($pstnrmatch, $pstnr))
	{
		echo 'inkorrekt postnummer';
		die();
	}
	else
	{
		
		$sql = "INSERT INTO registrering (perNr, studID, namn, mail, adress, ort, postNr)
		VALUES ('$persnr', '$stdId', '$foefNamn', '$emejl', $address', '$oort', '$pstnr')";
		$connection->query($sql);
		echo 'Du är nu registrerad';
	}
	$connection->close();
	

	
?>