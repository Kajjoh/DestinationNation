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
	$findNation = "SELECT nation from evenemang where eveID = '$eveID'";
	$hamtaNation = mysqli_query($conn, $findNation);
	$nationFromDB = "";
	
	while ($row = mysqli_fetch_assoc($retrieveEveIDfromdb))
	{
		$eveIDfromdb = $row['eveID'];
	}
	while ($row = mysqli_fetch_assoc($hamtaNation))
	{
		$nationFromDB = $row['nation'];
	}
	
	if ($eveID != $eveIDfromdb)
	{
		session_start();
		$_SESSION['eveIDfel2'] = "Det här evenemangsid:et finns inte i databasen";
		header("Location: ../hanteraEvenemang.php");
	}
	else if ($_SESSION['nation'] != $nationFromDB)
	{
		session_start();
		$_SESSION['felbehorighet2'] = "Du har inte behörighet att redigera bort en annan nations evenemang";
		header("Location: ../hanteraEvenemang.php");
	}
	else if (empty($evTitel))
	{
		session_start();
		$_SESSION['tomtitel'] = "Vänligen fyll i en titel";
		header("Location: ../hanteraEvenemang.php");
	}
	else if (empty($evPlats))
	{
		session_start();
		$_SESSION['tomplats'] = "Vänligen fyll i en plats";
		header("Location: ../hanteraEvenemang.php");
	}
	else if (empty($tidFran))
	{
		session_start();
		$_SESSION['tomtidFran'] = "Vänligen fyll i en starttid";
		header("Location: ../hanteraEvenemang.php");
	}
	else if (empty($tidTill))
	{
		session_start();
		$_SESSION['tomtidTill'] = "Vänligen fyll i en sluttid";
		header("Location: ../hanteraEvenemang.php");
	}
	else if (empty($evDatum))
	{
		session_start();
		$_SESSION['tomtdatum'] = "Vänligen fyll i ett datum";
		header("Location: ../hanteraEvenemang.php");
	}
	else if (empty($evBeskrivning))
	{
		session_start();
		$_SESSION['tombeskrivning'] = "Vänligen lägg till en beskrivning";
		header("Location: ../hanteraEvenemang.php");
	}
	else 
	{
		$sql = "UPDATE evenemang SET titel = '$evTitel', typ = '$evTyp', fran = '$tidFran', till = '$tidTill', datum = '$evDatum',
		krav = '$evKrav', beskrivning = '$evBeskrivning', plats = '$evPlats'
        WHERE eveID = '$eveID'";
		$conn->query($sql);
		header('Location: ../startsidaNation.php');
	}
	$conn->close();