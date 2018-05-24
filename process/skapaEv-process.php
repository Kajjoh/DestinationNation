<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

    $evTitel = mysqli_real_escape_string($conn, trim($_POST['Titel']));
    $evTyp = mysqli_real_escape_string($conn, trim($_POST['cars']));
    $evPlats = mysqli_real_escape_string($conn, trim($_POST['plats']));
    $tidFran = mysqli_real_escape_string($conn, trim($_POST['Fran']));
    $tidTill = mysqli_real_escape_string($conn, trim($_POST['Till']));
    $evDatum = mysqli_real_escape_string($conn, trim($_POST['Datum']));
    $evKrav = mysqli_real_escape_string($conn, trim ($_POST['krav'])) ;
    $evBeskrivning = mysqli_real_escape_string($conn, trim($_POST['Beskrivning']));

    $timeMatch = "/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/";
    $dateMatch = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
    $nation = $_SESSION['nation'];

    if ($evTitel=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");
    }
    else if ($evTitel=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");

    }
    else if ($evPlats=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");
    }
    else if ($evBeskrivning=="") 
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");
    }
    else if ($tidFran=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");
    }
    else if ($tidTill=="") 
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");
    }
    else if ($evDatum=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../skapaEv.php");
    }
    else if (!(preg_match($timeMatch, $tidFran)))
    {
        $_SESSION['felTid'] = "Tiden ska skrivas som 00:00.";
        header("Location: ../skapaEv.php");
    }
    else if (!(preg_match($timeMatch, $tidTill)))
    {
        $_SESSION['felTid'] = "Tiden ska skrivas som 00:00.";
        header("Location: ../skapaEv.php");
    }    
    else if (!(preg_match($dateMatch, $evDatum)))
    {
        $_SESSION['felDatum'] = "Datumet ska skrivas som 2018-01-01.";
        header("Location: ../skapaEv.php");
    }
    else 
    {
        $sql = "INSERT INTO evenemang (titel, typ, plats, fran, till, datum, krav, beskrivning, nation) 
        VALUES ('$evTitel', '$evTyp', '$evPlats', '$tidFran', '$tidTill', '$evDatum', '$evKrav', '$evBeskrivning', '$nation')";
                
        $conn->query($sql);
    }


    $conn->close();

    header('Location: ../skapaEv.php');

?>


<!--  -->

