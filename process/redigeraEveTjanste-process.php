<?php
	
	include('connection.php');
	session_start();
	
	$eveID = mysqli_real_escape_string($conn, trim($_POST['evenemangsid']));
	
	$evTitel = mysqli_real_escape_string($conn, trim($_POST['Titel']));
    $evTyp = mysqli_real_escape_string($conn, trim($_POST['cars']));
    $evPlats = mysqli_real_escape_string($conn, trim($_POST['plats']));
    $tidFran = mysqli_real_escape_string($conn, trim($_POST['Fran']));
    $tidTill = mysqli_real_escape_string($conn, trim($_POST['Till']));
    $evDatum = mysqli_real_escape_string($conn, trim($_POST['Datum']));
    $evKrav = mysqli_real_escape_string($conn, trim ($_POST['krav'])) ;
    $evBeskrivning = mysqli_real_escape_string($conn, trim($_POST['Beskrivning']));
	$findeveid = "SELECT eveID FROM evenemang WHERE eveID = '$eveID'";
	$retrieveEveIDfromdb = mysqli_query($conn, $findeveid);
	$eveIDfromdb = "";
	$timematch = "/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/";
    $datematch = "/^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/";
	
	while ($row = mysqli_fetch_assoc($retrieveEveIDfromdb))
	{
		$eveIDfromdb = $row['eveID'];
	}
	
	if ($eveID != $eveIDfromdb)
	{
		
		$_SESSION['eveIDfel2'] = "Det här evenemangsid:et finns inte i databasen";
		header("Location: ../raderaEv.php");
	}

	else if (empty($evTitel))
	{
		
		$_SESSION['tomtitel'] = "Vänligen fyll i en titel";
		header("Location: ../raderaEv.php");
	}
	else if (empty($evPlats))
	{
		
		$_SESSION['tomplats'] = "Vänligen fyll i en plats";
		header("Location: ../raderaEv.php");
	}
	else if (empty($tidFran))
	{
		
		$_SESSION['tomtidFran'] = "Vänligen fyll i en starttid";
		header("Location: ../raderaEv.php");
	}
	else if (empty($tidTill))
	{
		
		$_SESSION['tomtidTill'] = "Vänligen fyll i en sluttid";
		header("Location: ../raderaEv.php");
	}
	else if (empty($evDatum))
	{
		
		$_SESSION['tomtdatum'] = "Vänligen fyll i ett datum";
		header("Location: ../raderaEv.php");
	}
	else if (empty($evBeskrivning))
	{
		
		$_SESSION['tombeskrivning'] = "Vänligen lägg till en beskrivning";
		header("Location: ../raderaEv.php");
	}
	else if (!preg_match($timematch, $tidFran))
	{	
		
		$_SESSION['feltid1'] = "Tiden ska skrivas enligt formatet 00:00";
		header("Location: ../raderaEv.php");
	}
	
	else if (!preg_match($timematch, $tidTill))
	{
		
		$_SESSION['feltid2'] = "Tiden ska skrivas enligt formatet 00:00";
		header("Location: ../raderaEv.php");
		
	}
	
	else if (!preg_match($datematch, $evDatum))
	{
		
		$_SESSION['feldatum'] = "Datum ska skrivas enligt formatet ÅÅÅÅ-MM-DD";
		header("Location: ../raderaEv.php");
		
	}
	
	else 
	{
		$sql = "UPDATE evenemang SET titel = '$evTitel', typ = '$evTyp', fran = '$tidFran', till = '$tidTill', datum = '$evDatum',
		krav = '$evKrav', beskrivning = '$evBeskrivning', plats = '$evPlats'
        WHERE eveID = '$eveID'";
		$conn->query($sql);
		header('Location: ../startsidaTjanstelev.php');
	}
    $conn->close();
?>