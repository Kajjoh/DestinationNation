<?php

    session_start();

    include('connection.php');

    $pubTitel = mysqli_real_escape_string($conn, trim($_POST['Titel']));
    $pubTid = mysqli_real_escape_string($conn, trim($_POST['Tid']));
    $pubDatum = mysqli_real_escape_string($conn, trim($_POST['Datum']));
    $pubMeddelande = mysqli_real_escape_string($conn, trim($_POST['Meddelande']));
    
    $timeMatch = "/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/";
    $dateMatch = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
    $tjanst = $_SESSION['admin'];
    $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
    $felmeddelande = $_SESSION['felmeddelande'];

    if ($pubTitel=="")
    {
         $felmeddelande;
        header("Location: ../publiceraTjanst.php");
    }
    else if ($pubTid=="")
    {
        $felmeddelande;
        header("Location: ../publiceraTjanst.php");

    }
    else if ($pubDatum=="")
    {
        $felmeddelande;
        header("Location: ../publiceraTjanst.php");
    }
    else if ($pubMeddelande=="") 
    {
        $felmeddelande;
        header("Location: ../publiceraTjanst.php");
    }
   else if (!(preg_match($timeMatch, $pubTid)))
    {
        $_SESSION['felTid'] = "Tiden ska skrivas som 00:00.";
        header("Location: ../publiceraTjanst.php");
    } 
    else if (!(preg_match($dateMatch, $pubDatum)))
    {
        $_SESSION['felDatum'] = "Datumet ska skrivas som 2018-01-01.";
        header("Location: ../publiceraTjanst.php");
    }
    else 
    {
        $sql = "INSERT INTO meddelande (Titel, Tid, Datum, Meddelande) 
        VALUES ('$pubTitel', '$pubTid', '$pubDatum', '$pubMeddelande')";
                
        $conn->query($sql);
    }
    $conn->close();

    header('Location: ../publiceraTjanst.php');
?>