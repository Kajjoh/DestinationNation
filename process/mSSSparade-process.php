<?php
 
    include('connection.php');

    $sql = "SELECT titel, typ, nation, datum, fran, till, krav FROM sparaevenemang a, evenemang b WHERE a.eveID=b.eveID";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<div> 
                    <br> Titel: ". $row["titel"]."
                    <br> Typ: " . $row["typ"]. "
                    <br> Nation: ".$row["nation"]."
                    <br> Plats: ". $row["plats"]." 
                    <br> Datum: " .$row["datum"]." 
                    <br> Från: " .$row["fran"]."
                    <br> Till: " .$row["till"]."
                    <br> Till: " .$row["krav"]."
                </div>";
        }
    }      
    else
    {
        echo "Du har inga sparade evenemang!";
    }
     
    $conn->close();
?>