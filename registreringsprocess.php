<?php
	$host = "localhost";
	$uname = "root";
	$pass = "";
	$dbname = "projekt";
  
    $connection = new mysqli($host, $uname, $pass, $dbname);
	if ($connection->connect_error)
	{  
		die("Connection failed: ".$connection->connect_error);
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
		header("Location: registrering.php");
		die();
	}
	if (empty($emejl) || !preg_match($emailmatch, $emejl))
	{
		header("Location: registrering.php");
		die();
		
	}
	if (empty($foefNamn))
	{
		header("Location: registrering.php");
		die();
		
	}
	if (empty($stdId) || !preg_match($stdIdmatch, $stdId))
	{
		header("Location: registrering.php");
		die();
	}
	if (empty($address))
	{
		header("Location: registrering.php");
		die();
	}
	if (empty($oort))
	{
		header("Location: registrering.php");
		die();
	}
	if (empty($pstnr) || !preg_match($pstnrmatch, $pstnr))
	{
		header("Location: registrering.php");
		die();
	}
	else
	{
		
		$sql = "INSERT INTO registrering (perNr, studID, namn, mail, adress, ort, postNr)
		VALUES ('$persnr', '$stdId', '$foefNamn', '$emejl', $address', '$oort', '$pstnr')";
		$connection->query($sql);
	}
	$connection->close();
	
	include 'inloggning.php';
	
?>