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
	$sql = "SELECT * FROM evenemang";
    $result = $conn->query($sql);

    $row=mysqli_fetch_assoc($result);
    echo "<div> <br> Titel: ". $row["titel"]."
                <br> Plats: ". $row["plats"]." 
                <br> Nation: ".$row["nation"]."
                <br> Typ: " . $row["typ"]. "
                <br> Från: " .$row["fran"]."
                <br> Till: " .$row["till"]."
                <br> Datum: " .$row["datum"]."
                <br> Kräver anmälan: " .$row["krav"]."
                <br> Beskrivning: " .$row["beskrivning"]."       
            </div>";
     
    $conn->close();
?>