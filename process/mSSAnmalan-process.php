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

    $sql = "SELECT title, typ, fran, till, krav FROM evenemang";
    $result = $conn->query($sql);

    $row=mysqli_fetch_assoc($result);
    echo "<div> <br> Titel: ". $row["title"]." 
                <br> Typ: " . $row["typ"]. "
                <br> Från: " .$row["fran"]."
                <br> Till: " .$row["till"]."
                <br> Krav: " .$row["krav"]."     
            </div>";
     
    $conn->close();
?>