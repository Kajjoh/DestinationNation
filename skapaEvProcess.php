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
$evTid = mysqli_real_escape_string($conn, trim($_POST['Tid']));





?>

