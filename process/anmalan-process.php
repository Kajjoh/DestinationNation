<?php

include('connection.php');
session_start();

$person = mysqli_real_escape_string($conn, trim($_POST['Namn']));
$kon = ($_POST['kon']);
$matpref = ($_POST['mat']);
$drickpref = ($_POST['dryck']);
$allergi = ($_POST['Allergi']);
$kompis = ($_POST['Sallskap']);
$anvandare = $_SESSION['student'];
$valjstudid = "SELECT studID FROM registrering WHERE mail = '$anvandare'";
$hamtastudid = mysqli_query($conn, $valjstudid);
$kontrollstudid = mysqli_num_rows($hamtastudid);
$eveID = mysqli_real_escape_string($conn, trim($_POST['sparaEvenemang']));
$valjev = "SELECT eveID FROM evenemang WHERE eveID = '$eveID'";
$hamtaev = mysqli_query($conn, $valjev);
$kontrollev = mysqli_num_rows($hamtaev);
$IDfromdb = "";
$studidfromdb = "";
$valjanmalan = "SELECT eveID, studID FROM anmalan WHERE mail = '$anvandare'"; 
$hamtaanmalan = mysqli_query($conn, $valjanmalan);
$kontrollanmalan = mysqli_num_rows($hamtaanmalan);
$anmid = "";
$anmeveid = "";

if ($kontrollev > 0)
{
	while ($row = mysqli_fetch_assoc($hamtaev))
	{
		$IDfromdb = $row['eveID'];
	}
}	

if ($kontrollstudid > 0)
{
	while ($row = mysqli_fetch_assoc($hamtastudid))
	{
		$studidfromdb = $row['studID'];
	}
}

if ($kontrollanmalan > 0)
{
	while ($row = mysqli_fetch_assoc($hamtaanmalan))
	{
		$anmid = $row['studID'];
		$anmeveid = $row['eveID'];
	}
	$_SESSION['redananmald'] = "Du är redan anmäld till det här evenemanget";
	header("Location: ../AnmalanEv.php");
}

//Tar hand om fallen för fält som inte får vara tomma. 





else if(empty($person))
{
    
    $_SESSION['fyllinamn'] = "Fyll i ditt namn";
    header("Location: ../AnmalanEv.php");
   // die();
} 
else if (empty($eveID))
	{
		$_SESSION['tomtevid'] = "Var god fyll i ett evenemangsid";
		header("Location: ../AnmalanEv.php");
	}
else if ($eveID != $IDfromdb)
	{
		$_SESSION['idfinnsej'] = "Det här evenemanget finns ej";
		header("Location: ../AnmalanEv.php");
	}

else
{
    $sql = "INSERT INTO anmalan (eveID, studID, namn, mail, kon, mat, allergi, dryck, sallskap)
    VALUES ('$eveID', '$studidfromdb', '$person', '$anvandare', '$kon', '$matpref', '$allergi', '$drickpref', '$kompis')";
    $conn->query($sql);
    header("Location: ../startsidaStudent.php");
    
}

$conn->close();
?>


