<?php
	
	include('connection.php');
	session_start();
	
	$eveID = mysqli_real_escape_string($conn, trim($_POST['evenemangsid']));
	

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
		$_SESSION['eveIDfel'] = "Det här evenemangsid:et finns inte i databasen";
		header("Location: ../hanteraEvenemang.php");
	}
	else if ($_SESSION['nation'] != $nationFromDB)
	{
		session_start();
		$_SESSION['felbehorighet'] = "Du har inte behörighet att ta bort en annan nations evenemang";
		header("Location: ../hanteraEvenemang.php");
	}
	else 
	{
		$sql = "DELETE FROM evenemang WHERE eveID = '$eveID'";
		$conn->query($sql);
		header('Location: ../startsidaNation.php');
	}
	$conn->close();