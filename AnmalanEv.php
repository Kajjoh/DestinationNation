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

/*Börjar med att trimma alla fält*/

$person = mysqli_real_escape_string($conn, trim($_POST['Namn']));
$email = mysqli_real_escape_string($conn, trim($_POST['Mail']));

