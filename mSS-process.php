<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "projekt";

    // Create connection to database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection with database
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT perNr, studID, namn, mail, adress, ort, postNr FROM registrering";
    $result = $conn->query($sql);

    $row=mysqli_fetch_assoc($result);
    echo "<div> <p class=persuppgRad>Personnummer: <br>". $row["perNr"]." </p>
                <p class=persuppgRad> Namn: <br>" .$row["namn"]." </p>
                <p class=persuppgRad>  Mail: <br>" .$row["mail"]." </p>
                <p class=persuppgRad> Adress: <br>" .$row["adress"]." </p>
                <p class=persuppgRad> Ort: <br>" .$row["ort"]." </p>
                <p class=persuppgRad> Postnummer: <br>" .$row["postNr"]." </p>      
            </div>";
     
    $conn->close();




?>