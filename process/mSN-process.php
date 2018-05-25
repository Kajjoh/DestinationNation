<?php

    include('connection.php');

    $nation = $_SESSION['nation'];

	$sql = "SELECT * FROM evenemang WHERE (nation = '$nation')";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<div> 
                <br> Evenemangs ID: ". $row["eveID"]."
                <br> Titel: ". $row["titel"]."
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