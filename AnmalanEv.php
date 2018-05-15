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
$manlig = ($_POST['Man']);
$kvinnlig = ($_POST['Kvinna']);
$ingaPref = ($_POST['inga']);
$vegeterian = ($_POST['Veg']);
$vegan = ($_POST['Vegan']);
$allergisk = ($_POST['Allergi']);
$ingenAlkohol = ($_POST['Alkofritt']);
$vin = ($_POST['Vin']);
$ciderOvin = ($_POST['CidochVin']);
$oloVin = ($_POST['OlochVin']);
$personErr = "";
$emailErr = "";
$konErr = "";
$matErr = "";
$drickErr = "";

//Tar hand om fallen för fält och boxar som inte får vara tomma. 

if(empty($person){
    $personErr = "OBS! Obligatoriskt fält.";
    die();
}

if(empty($email) || preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email)){
    $emailErr = "OBS! Obligatoriskt fält.";
    die();
}

if(empty($kvinnlig) && empty($manlig)){
    $konErr = "OBS! Ange ett kön.";
    die();
}

if(empty($ingaPref) && empty($vegeterian) && empty($vegan)){
    $matErr = "OBS! Ange en matpreferens.";
    die();
}

if(empty($ingenAlkohol) && empty($vin) && empty($ciderOvin) && empty($oloVin)){
    $drickErr = "OBS! Ange en dryckpreferens.";
}


