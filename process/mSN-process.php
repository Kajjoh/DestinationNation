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

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
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
        }
    }
     
    $conn->close();
?>