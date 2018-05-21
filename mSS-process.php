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
    echo "<div> <br> Personnummer: ". $row["perNr"]." 
                <br> StudentID: " . $row["studID"]. "
                <br> Namn: " .$row["namn"]."
                <br> Mail: " .$row["mail"]."
                <br> Adress: " .$row["adress"]."
                <br> Ort: " .$row["ort"]."
                <br> Postnummer: " .$row["postNr"]."       
            </div>";
     
    $conn->close();




?>