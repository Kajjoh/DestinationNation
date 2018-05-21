<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
};

/*koden ska spara in alla anmälningar på databasen. När en användare har skrivit 
sin anmälan kommer den till den ny sida med "tack för din anmälan" och kan
sedan skickas tillbaka till startsidan.*/

//Skapar variabelnamn för alla fält

$person = mysqli_real_escape_string($conn, trim($_POST['Namn']));
$email = mysqli_real_escape_string($conn, trim($_POST['Mail']));
$kon = ($_POST['kon']);
$matpref = ($_POST['mat']);
$drickpref = ($_POST['dryck']);
$allergi = ($_POST['Allergi']);
$kompis = ($_POST['Sallskap']);
/*$personErr = "";
$emailErr = "";*/

//Tar hand om fallen för fält som inte får vara tomma. 

if(empty($person)){
    echo 'OBS! Fyll i ditt för- och efternamn.';
    die();
} 

if(empty($email) || !preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email)){
    //$emailErr = "OBS! Obligatoriskt fält.";
    echo 'OBS! Fyll i en giltig e-postadress.';
    die();
}

else{
    $sql = "INSERT INTO anmalan (namn, mail, kon, mat, allergi, dryck, sallskap)
    VALUES ('$person', '$email', '$kon', '$matpref', '$allergi', '$drickpref', '$kompis')";
    $conn->query($sql);
    echo 'Tack för din anmälan!';
    
}

$conn->close();
?>


