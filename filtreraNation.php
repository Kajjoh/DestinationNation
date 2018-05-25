<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "projekt";

    // Create connection to database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	session_start();
    // Check connection with database
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
	if (isset($_SESSION['gotlandsKnapp']))
	{
		session_start();
		$_SESSION['gotland'] = 'gotland';
		header("Location: startsidaStudent")
	}