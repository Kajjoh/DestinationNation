<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

/*koden ska spara in alla anmälningar på databasen. När en användare har skrivit 
sin anmälan kommer den till den ny sida med "tack för din anmälan" och kan
sedan skickas tillbaka till startsidan.*/

//Skapar variabelnamn för alla fält

$person = mysqli_real_escape_string($conn, trim($_POST['Namn']));
$kon = ($_POST['kon']);
$matpref = ($_POST['mat']);
$drickpref = ($_POST['dryck']);
$allergi = ($_POST['Allergi']);
$kompis = ($_POST['Sallskap']);


//Tar hand om fallen för fält som inte får vara tomma. 
$anvMail =  $_SESSION['student'];


if(empty($person))
{
    session_start();
    $_SESSION['fyllinamn'] = "Fyll i ditt namn";
    header("Location: AnmalanEv.php");
   // die();
} 

else
{
    $sql = "INSERT INTO anmalan (namn, mail, kon, mat, allergi, dryck, sallskap)
    VALUES ('$person', '$anvMail', '$kon', '$matpref', '$allergi', '$drickpref', '$kompis')";
    $conn->query($sql);
    header("Location: startsidaStudent.php");
    
}

$conn->close();
?>


