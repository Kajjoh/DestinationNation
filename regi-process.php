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

		$prnr = mysqli_real_escape_string($conn, trim($_POST['prnr']));
		$stid = mysqli_real_escape_string($conn, trim($_POST['stid']));
		$name = mysqli_real_escape_string($conn, trim($_POST['namn']));
		$mail = mysqli_real_escape_string($conn, trim($_POST['mail']));
		$adress = mysqli_real_escape_string($conn, trim($_POST['adress']));
		$ort = mysqli_real_escape_string($conn, trim($_POST['ort']));
		$pstnr = mysqli_real_escape_string($conn, trim($_POST['pstnr']));
		$losen = mysqli_real_escape_string($conn, trim($_POST['losen']));

		$salt = "salt";

		$sql = "INSERT INTO registrering (perNr, studID, namn, mail, adress, ort, postNr, losen, salt) 
                VALUES ('$prnr', '$stid', '$name', '$mail', '$adress', '$ort', '$pstnr', '$losen', '$salt')";
                $conn->query($sql);


	$conn->close();
	
?>