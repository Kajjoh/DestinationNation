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
$tidFran = mysqli_real_escape_string($conn, trim($_POST['Från']));
$tidTill = mysqli_real_escape_string($conn, trim($_POST['Till']));
$evDatum = mysqli_real_escape_string($conn, trim($_POST['Datum']));
$evJa =  isset($_POST['Ja']);
$evNej = isset($_POST['Nej']);
$evBeskrivning = mysqli_real_escape_string($conn, trim($_POST['Beskrivning']));

if ((empty($evTitel)) || (empty($evTyp)) || (empty($tidFran)) || (empty($tidTill)) || (empty($evDatum)) || (empty($evBeskrivning))){
    echo 'OBS! Fyll i alla fält.';
}
else if ((!empty($evJa)) && (!empty($evNej)))
{
    echo 'OBS! Bara ett alternativ kan väljas.';
}
else if ((empty($evJa)) && (empty($evNej)))
{
    echo 'Ett alternativ måste väljas.';
}

else
{
    $sql = "INSERT INTO evenemang (title, typ, fran, till, tid, krav, beskrivning)
    VALUES ('$evTitel', '$evTyp', '$tidFran', '$tidTill', '$evDatum', '$evJa', '$evNej', '$evBeskrivning')";

    echo 'Tack! Ditt evenemang är nu skapat.';    
    $conn->query($sql);
}

$conn->close();
?>
