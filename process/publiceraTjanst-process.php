<?php

    session_start();

    include('connection.php');

    $pubTitel = mysqli_real_escape_string($conn, trim($_POST['Titel']));
    $pubTid = mysqli_real_escape_string($conn, trim($_POST['Tid']));
    $pubDatum = mysqli_real_escape_string($conn, trim($_POST['Datum']));
    $pubMeddelande = mysqli_real_escape_string($conn, trim($_POST['Meddelande']));
    

    if ($pubTitel=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");
    }
    else if ($pubTid=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");

    }
    else if ($pubDatum=="")
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
        header("Location: ../publiceraTjanst.php");
    }
    else if ($pubMeddelande=="") 
    {
        $_SESSION['felmeddelande'] = "Du måste fylla i alla fält!";
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