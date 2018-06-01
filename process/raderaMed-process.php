<?php
	
	include('connection.php');
	session_start();
	
	$mail = mysqli_real_escape_string($conn, trim($_POST['email']));
	
	$findusermail = "SELECT mail FROM student WHERE mail = '$mail'";
	$retrievemailfromdb = mysqli_query($conn, $findusermail);
	$emailfromdb = "";
	while ($row = mysqli_fetch_assoc($retrievemailfromdb))
	{
		$emailfromdb = $row['mail'];
	}
	if ($mail != $emailfromdb)
	{
		
		$_SESSION['emailfel'] = "Matchar ingen email i databasen";
		header("Location: ../raderaMed.php");
	}
	else if (empty($mail))
	{
		$_SESSION['emailfel2'] = "Fyll i en mejladress";
		header("Location: ../raderaMed.php");
	}
	else 
	{
		$sql = "DELETE FROM student WHERE mail = '$mail'";
		$conn->query($sql);
		header('Location: ../startsidaTjanstelev.php');
	}
	$conn->close();
	