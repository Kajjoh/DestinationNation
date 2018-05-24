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
	

	if (isset($_POST['pubKnapp']))
	{
		session_start();
		$_SESSION['pub'] = 'pub';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['klubbKnapp']))
	{
		session_start();
		$_SESSION['klubb'] = 'klubb';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['lunchKnapp']))
	{
		session_start();
		$_SESSION['lunch'] = 'lunch';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['frukostKnapp']))
	{
		session_start();
		$_SESSION['frukost'] = 'frukost';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['restaurangKnapp']))
	{
		session_start();
		$_SESSION['restaurang'] = 'restaurang';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['brunchKnapp']))
	{
		session_start();
		$_SESSION['brunch'] = 'brunch';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['slappKnapp']))
	{
		session_start();
		$_SESSION['slapp'] = 'slapp';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['gasqueKnapp']))
	{
		session_start();
		$_SESSION['gasque'] = 'gasque';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['konsertKnapp']))
	{
		session_start();
		$_SESSION['konsert'] = 'konsert';
		header("Location: startsidaStudent.php");
		
	}
	else if (isset($_POST['ovrigtKnapp']))
	{
		session_start();
		$_SESSION['ovrigt'] = 'ovrigt';
		header("Location: startsidaStudent.php");
		
	}
?>
	