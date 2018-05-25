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

	if (isset($_POST['allaEvKnapp']))
	{
		session_start();
		$_SESSION['allaevenemang'] = 'allaevenemang';
		header("Location: ../startsidaNation.php");
	}
	
    //om  pubKnapp är set, alltså vald 
	else if (isset($_POST['pubKnapp']))
	{
		session_start();
		$_SESSION['pub'] = 'pub'; // då startas sessionen pub
		header("Location: ../startsidaNation.php"); 
		// och directas till startsidaNation
		
	}
	 //om  klubbKnapp är set, alltså vald 
	else if (isset($_POST['klubbKnapp']))
	{
		session_start();
		$_SESSION['klubb'] = 'klubb';  // då startas sessionen klass
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	 //om  lunchKnapp är set, alltså vald 
	else if (isset($_POST['lunchKnapp']))
	{	
		session_start();
		$_SESSION['lunch'] = 'lunch'; // då startas sessionen lunch
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	 //om frukostKnapp är set, alltså vald 
	else if (isset($_POST['frukostKnapp']))
	{
		session_start();
		$_SESSION['frukost'] = 'frukost'; // då startas sessionen frukost
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	 //om  restaurangKnapp är set, alltså vald
	else if (isset($_POST['restaurangKnapp']))
	{
		session_start();
		$_SESSION['restaurang'] = 'restaurang'; // då startas sessionen restaurang
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	 //om  brunchKnapp är set, alltså vald 
	else if (isset($_POST['brunchKnapp']))
	{
		session_start();
		$_SESSION['brunch'] = 'brunch'; // då startas sessionen brunch
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	 //om  slappKnapp är set, alltså vald 
	else if (isset($_POST['slappKnapp']))
	{
		session_start();
		$_SESSION['slapp'] = 'slapp'; // då startas sessionen slapp
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	 //om  gasqueKnapp är set, alltså vald
	else if (isset($_POST['gasqueKnapp']))
	{
		session_start();
		$_SESSION['gasque'] = 'gasque'; // då startas sessionen gasque
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	//om  konsertKnapp är set, alltså vald
	else if (isset($_POST['konsertKnapp']))
	{
		session_start();
		$_SESSION['konsert'] = 'konsert'; // då startas sessionen konsert
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
	//om  ovrigtKnapp är set, alltså vald
	else if (isset($_POST['ovrigtKnapp']))
	{
		session_start();
		$_SESSION['ovrigt'] = 'ovrigt'; // då startas sessionen ovrigt
		header("Location: ../startsidaNation.php");
		// och directas till startsidaNation
	}
?>