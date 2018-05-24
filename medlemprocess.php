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
	
	$mail = mysqli_real_escape_string($conn, trim($_POST['email']));
	
	$findusermail = "SELECT mail FROM registrering WHERE mail = '$mail'";
	$retrievemailfromdb = mysqli_query($conn, $findusermail);
	$emailfromdb = "";
	while ($row = mysqli_fetch_assoc($retrievemailfromdb))
	{
		$emailfromdb = $row['mail'];
	}
	if ($mail != $emailfromdb)
	{
		session_start();
		$_SESSION['emailfel'] = "Matchar ingen email i databasen";
		header("Location: medlemmar.php");
	}
	else 
	{
		$sql = "DELETE FROM registrering WHERE mail = '$mail'";
		$conn->query($sql);
	}
	$conn->close();
	include 'startsidaTjanstelev.php';