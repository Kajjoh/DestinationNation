<?php

include('connection.php');

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
    header("Location: ../anmalanEv.php");
   // die();
} 

else
{
    $sql = "INSERT INTO anmalan (namn, mail, kon, mat, allergi, dryck, sallskap)
    VALUES ('$person', '$anvMail', '$kon', '$matpref', '$allergi', '$drickpref', '$kompis')";
    $conn->query($sql);
    header("Location: ../startsidaStudent.php");
    
}

$conn->close();
?>


