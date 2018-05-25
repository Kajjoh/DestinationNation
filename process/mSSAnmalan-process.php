<?php

    include('connection.php');

    $sql = "SELECT  titel, typ, nation, fran, till, datum, plats FROM anmalan a, evenemang b WHERE a.eveID=b.eveID";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<div> 
                    <br> Evenemangs ID: ". $row["eveID"]."
                    <br> Nation: ".$row["nation"]."
                    <br> Titel: ". $row["titel"]."
                    <br> Plats: ". $row["plats"]." 
                    <br> Typ: " . $row["typ"]. "
                    <br> Från: " .$row["fran"]."
                    <br> Till: " .$row["till"]."
                    <br> Datum: " .$row["datum"]."       
                </div>";
        }
    }      
    else
    {
        echo "Du har inga anmälda evenemang!";
    }

    $conn->close();
?>