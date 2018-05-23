<?php
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

    if ($evTitel=="")
    {
        header("Location: SkapaEv.php");
    }
    else if ($evPlats=="")
    {
        header("Location: SkapaEv.php");
    }
    else if ($evBeskrivning=="") 
    {
        header("Location: SkapaEv.php");
    }
    else if ($tidFran=="")
    {
        header("Location: SkapaEv.php");
    }
    else if ($tidTill=="") 
    {
        header("Location: SkapaEv.php");
    }
    else if ($evDatum=="")
    {
        header("Location: SkapaEv.php");
    }
    else if (!(preg_match($timeMatch, $tidFran)))
    {
        header("Location: SkapaEv.php");
    }
    else if (!(preg_match($timeMatch, $tidTill)))
    {
        header("Location: SkapaEv.php");
    }    
    else if (!(preg_match($dateMatch, $evDatum)))
    {
        header("Location: SkapaEv.php");
    }
    else
    {
        $sql = "INSERT INTO evenemang (titel, typ, plats, fran, till, tid, krav, beskrivning) 
        VALUES ('$evTitel', '$evTyp', '$evPlats', '$tidFran', '$tidTill', '$evDatum', '$evKrav', '$evBeskrivning')";
                
        $conn->query($sql);
    }


    $conn->close();

    header('Location: SkapaEv.php');

?>

