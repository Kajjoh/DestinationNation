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
    $evJa =  isset($_POST['Ja']);
    $evNej = isset($_POST['Nej']);
    $evBeskrivning = mysqli_real_escape_string($conn, trim($_POST['Beskrivning']));

    $timeMatch = "/([0-2][0-9]:([0-5][0-9])/";
    $dateMatch = "/([1-2][0-9][0-9][0-9]-[0-1][0-9]-[0-3][0-9]/)";

    if (empty($evTitel) || (empty($evPlats)) || (empty($evBeskrivning)) || (empty($tidFran)) || (empty($tidTill)) || (empty($evDatum))
	{
		header("Location: SkapaEv.php");
    }   
    else if 
    {
        if (!preg_match($timeMatch, $tidFran)) || (!preg_match($timeMatch, $tidTill))
        {
            header("Location: SkapaEv.php");
        }
    }

    else 
    {
        $sql = "INSERT INTO evenemang (titel, typ, plats, fran, till, tid, beskrivning) /* VI MÅSTE LÄGGA TILL KRAV*/
        VALUES ('$evTitel', '$evTyp', '$evPlats', '$tidFran', '$tidTill', '$evDatum', '$evBeskrivning')";
        
        $conn->query($sql);
    }

    $conn->close();

    header('Location: SkapaEv.php');

?>
