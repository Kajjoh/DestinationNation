<?php

    include('connection.php');

    // Get values from login.php
    $inputmail = $_POST['email'];
    $inputpassword = $_POST['pword'];
	$mailFromDB = "";
	$namnFromDB = "";

    $sql = "SELECT namn, mail, losen, salt FROM registrering WHERE mail='$inputmail'";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result))
	{
		$mailFromDB = $row['mail'];
        $namnFromDB = $row['namn'];
        $pwFromDB = $row['losen'];
        $saltFromDB = $row['salt'];
	}
        
        
    $hash = hash('sha256', ($saltFromDB . $inputpassword));

    if ($pwFromDB==$hash)
    {	
		session_start();
		$_SESSION['user'] = "$namnFromDB";
        header("Location: ../startsidaStudent.php");
    }
    else if (empty($inputmail) || empty($mailFromDB))
    {	
		session_start();
		$_SESSION['felmail'] = "Felaktig emailadress";
        header("Location: ../loginStud.php");
    }
	else
	{
		session_start();
		$_SESSION['fellosen'] = "Fel lösenord";
		header("Location: ../loginStud.php");
	}
             
    $_SESSION['student'] = "$mailFromDB";

    $conn->close();

?>