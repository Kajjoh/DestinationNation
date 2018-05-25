<?php
	
	include('connection.php');
	
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
		header("Location: ../raderaMed.php");
	}
	else 
	{
		$sql = "DELETE * FROM registrering WHERE mail = '$mail'";
		$conn->query($sql);
		header('Location: ../startsidaTjanstelev.php');
	}
	$conn->close();
	