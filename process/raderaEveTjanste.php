<?php
	
	include('connection.php');
	
	$eveID = mysqli_real_escape_string($conn, trim($_POST['evenemangsid']));

	$findeveid = "SELECT eveID FROM evenemang WHERE eveID = '$eveID'";
	$retrieveEveIDfromdb = mysqli_query($conn, $findeveid);
	$eveIDfromdb = "";
	while ($row = mysqli_fetch_assoc($retrieveEveIDfromdb))
	{
		$eveIDfromdb = $row['eveID'];
	}
	if ($eveID != $eveIDfromdb)
	{
		session_start();
		$_SESSION['eveIDfel'] = "Det här evenemangsid:et finns inte i databasen";
		header("Location: ../raderaEv.php");
	}
	else 
	{
		$sql = "DELETE FROM evenemang WHERE eveID = '$eveID'";
		$conn->query($sql);
		header('Location: ../startsidaTjanstelev.php');
	}
	$conn->close();