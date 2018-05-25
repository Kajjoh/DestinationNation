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
	if (isset($_POST['gotlandsKnapp']))
	{
		session_start();
		$_SESSION['gotland'] = 'gotland';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['ghKnapp']))
	{
		session_start();
		$_SESSION['gh'] = 'gh';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['gbgKnapp']))
	{
		session_start();
		$_SESSION['gbg'] = 'gbg';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['kalmarsKnapp']))
	{
		session_start();
		$_SESSION['kalmar'] = 'kalmar';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['norrlandsKnapp']))
	{
		session_start();
		$_SESSION['norrland'] = 'norrland';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['smalandsKnapp']))
	{
		session_start();
		$_SESSION['smaland'] = 'smaland';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['stockenKnapp']))
	{
		session_start();
		$_SESSION['stocken'] = 'stocken';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['snerikesKnapp']))
	{
		session_start();
		$_SESSION['snerike'] = 'snerike';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['uplandsKnapp']))
	{
		session_start();
		$_SESSION['upland'] = 'upland';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['varmlandsKnapp']))
	{
		session_start();
		$_SESSION['varmland'] = 'varmland';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['vgKnapp']))
	{
		session_start();
		$_SESSION['vg'] = 'vg';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['vdalaKnapp']))
	{
		session_start();
		$_SESSION['vdala'] = 'vdala';
		header("Location: startsidaStudent");
	}
	
	else if (isset($_POST['ogKnapp']))
	{
		session_start();
		$_SESSION['og'] = 'og';
		header("Location: startsidaStudent");
	}