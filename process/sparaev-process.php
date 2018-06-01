<?php
	include('connection.php');
	session_start();
	
	$anvandare = $_SESSION['student'];
	$valjstudid = "SELECT studID FROM student WHERE mail = '$anvandare'";
	$hamtastudid = mysqli_query($conn, $valjstudid);
	$kontrollstudid = mysqli_num_rows($hamtastudid);
	$eveID = mysqli_real_escape_string($conn, trim($_POST['sparaEvenemang']));
	$valjev = "SELECT * FROM evenemang WHERE eveID = '$eveID'";
	$hamtaev = mysqli_query($conn, $valjev);
	$kontrollev = mysqli_num_rows($hamtaev);
	$valjsparat = "SELECT studID, eveID FROM sparaevenemang WHERE studID = '$studidfromdb' AND eveID = '$eveID'";
	$hamtasparat = mysqli_query($conn, $valjsparat);
	$kontrollsparat = mysqli_num_rows($hamtasparat);
	$IDfromdb = "";
	$titelfromdb = "";
	$typfromdb = "";
	$franfromdb = "";
	$datumfromdb = "";
	$platsfromdb = "";
	$nationfromdb = "";
	$kravfromdb = "";
	$beskrivningfromdb = "";
	$studidfromdb = "";
	$sparatevid = "";
	$sparatstudid = "";
	$valjsparat = "SELECT studID, eveID FROM sparaevenemang WHERE studID = '$studidfromdb' AND eveID = '$eveID'";
	$hamtasparat = mysqli_query($conn, $valjsparat);
	$kontrollsparat = mysqli_num_rows($hamtasparat);
	
	if ($kontrollev > 0)
	{
		while ($row = mysqli_fetch_assoc($hamtaev))
		{
			$IDfromdb = $row['eveID'];
			$titelfromdb = $row['titel'];
			$typfromdb = $row['typ'];
			$franfromdb = $row['fran'];
			$tillfromdb = $row['till'];
			$datumfromdb = $row['datum'];
			$platsfromdb = $row['plats'];
			$nationfromdb = $row['nation'];
			$kravfromdb = $row['krav'];
			$beskrivningfromdb = $row['beskrivning'];
		}
	}
	if ($kontrollstudid > 0)
	{
		while ($row = mysqli_fetch_assoc($hamtastudid))
		{
			$studidfromdb = $row['studID'];
		}
	}
	
	$valjsparat = "SELECT studID, eveID FROM sparaevenemang WHERE studID = '$studidfromdb' AND eveID = '$eveID'";
	$hamtasparat = mysqli_query($conn, $valjsparat);
	$kontrollsparat = mysqli_num_rows($hamtasparat);
	if ($kontrollsparat > 0)
	{
		while ($row = mysqli_fetch_assoc($hamtasparat))
		{
			$sparatstudid = $row['studID'];
			$sparatevid = $row['eveID'];
		}
		
	}
		
	
	if (empty($eveID))
	{
		$_SESSION['tomtevid'] = "Var god fyll i ett evenemangsid";
		header("Location: ../sparaEvenemang.php");
	}
	else if ($eveID != $IDfromdb)
	{
		$_SESSION['idfinnsej'] = "Det här evenemanget finns ej";
		header("Location: ../sparaEvenemang.php");
	}
	else if ($eveID == $sparatevid && $studidfromdb == $sparatstudid)
	{
		$_SESSION['redansparat'] = "Du har redan sparat det här evenemanget";
		header("Location: ../sparaEvenemang.php");
	}
	
	else
	{
		$sql = "INSERT INTO sparaevenemang (studID, eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation)
		VALUES ('$studidfromdb', '$eveID', '$titelfromdb', '$typfromdb', '$franfromdb', '$tillfromdb', '$datumfromdb', '$kravfromdb',
		'$beskrivningfromdb', '$platsfromdb', '$nationfromdb')";
		mysqli_query($conn, $sql);
		header("Location: ../minaSidorStudent.php");
	}
	
	$conn->close();
	
	
	
?>