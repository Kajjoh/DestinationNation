<?php

    

    include('connection.php');
	session_start();

    $pubTitel = mysqli_real_escape_string($conn, trim($_POST['Titel']));
    $pubTid = mysqli_real_escape_string($conn, trim($_POST['Tid']));
    $pubDatum = mysqli_real_escape_string($conn, trim($_POST['Datum']));
    $pubMeddelande = mysqli_real_escape_string($conn, trim($_POST['Meddelande']));
    
    $timeMatch = "/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/";
    $dateMatch = "/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/";
    $tjanst = $_SESSION['admin'];
    
  

    if (empty($pubTitel))
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");
    }
    else if (empty($pubTid))
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");

    }
    else if (empty($pubDatum))
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");
    }
    else if (empty($pubMeddelande)) 
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");
    }
   else if ((!preg_match($timeMatch, $pubTid)))
    {
        $_SESSION['felTid'] = "Tiden ska skrivas som 00:00.";
        header("Location: ../publiceraTjanst.php");
    } 
    else if ((!preg_match($dateMatch, $pubDatum)))
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

    header('Location: ../startsidaTjanstelev.php');
?>