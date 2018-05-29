<?php
	
	include('connection.php');
	session_start();
	
	$nation = mysqli_real_escape_string($conn, trim($_POST['radNat']));
	
	$findnation = "SELECT nation FROM nationer WHERE nation = '$nation'";
	$retrievenationfromdb = mysqli_query($conn, $findnation);
	$nationfromdb = "";
	while ($row = mysqli_fetch_assoc($retrievenationfromdb))
	{
		$nationfromdb = $row['nation'];
	}
	if ($nation != $nationfromdb)
	{
		
		$_SESSION['felnation'] = "Matchar ingen nation i databasen";
		header("Location: ../raderaMed.php");
	}
	else if (empty($nation))
	{
		$_SESSION['ingennation'] = "Vänligen skriv in en nation";
		header("Location: ../raderaMed.php");	
	}
	else 
	{
		$sql = "DELETE FROM nationer WHERE nation = '$nation'";
		$conn->query($sql);
		header('Location: ../startsidaTjanstelev.php');
	}
	$conn->close();