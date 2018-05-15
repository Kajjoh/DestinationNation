<?php
  $uname = "root";
  $pass = "";
  $host = "localhost";
  $dbname = "projekt";
  
    $connection = new mysqli($host, $uname, $pass, $dbname);
	if ($connection->connect_error)
	{  
		die("Connection failed: ".$connection.connect_error);
	}
	//skapar variablerna för det vi skickar in
	$persnr = mysqli_real_escape_string($connection, trim($_POST['personnummer']));
	$stdId = mysqli_real_escape_string($connection, trim($_POST['sId']));
	$foefNamn = mysqli_real_escape_string($connection, trim($_POST['namn']));
	$emejl = mysqli_real_escape_string($connection, trim($_POST['email']));
	$adress = mysqli_real_escape_string($connection, trim($_POST['adress']));
	$ort = mysqli_real_escape_string($connection, trim($_POST['ort']));
	$pstnr = mysqli_real_escape_string($connection, trim($_POST['postnummr']));
	
	//skapar regex pregmatch för valideringen
	$emailmatch = "/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/";
	$pernrmatch = "/^(\d{6})-(\d{4})$/";
	$stdIdmatch = "/^[0-9]{8}$/";
	$pstnrmatch = "/^[0-9]{5}$/";
	
	//valideringen
	if (empty($persnr) || !preg_match($pernrmatch, $persnr))
	{
		header("Location: registrering.html");
		die();
	}
	if (empty($emejl) || !preg_match($emailmatch, $emejl))
	{
		header("Location: registrering.html");
		die();
		
	}
	if (empty($foefNamn))
	{
		header("Location: registrering.html");
		die();
		
	}
	if (empty($stdId) || !preg_match($stdIdmatch, $stdId))
	{
		header("Location: registrering.html");
		die();
	}
	if (empty($adress))
	{
		header("Location: registrering.html");
		die();
	}
	if (empty($ort))
	{
		header("Location: registrering.html");
		die();
	}
	if (empty($pstnr) || !preg_match($pstnrmatch, $pstnr))
	{
		header("Location: registrering.html");
		die();
	}
	else
	{
		
		$sql = "INSERT INTO registrering (perNR, studID, namn, mail, adress, ort, postNr)
		VALUES ('$persnr', '$stdId', '$foefNamn', '$emejl', $adress', '$ort', '$pstnr')";
		$connection->query($sql);
	}
	$connection->close();
	
	include 'inloggning.php';
	
?>	