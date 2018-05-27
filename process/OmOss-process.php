<!DOCTYPE html>
<html>
    <head>
        <title>DestinationNation</title>
        <link href="html/main.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <div id="display">
        <?php

            include('connection.php');

            $sql = "SELECT  Titel, Tid, Datum, Meddelande FROM meddelande";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<div> 
                            <br> Meddelanden från tjänsteleverantör:
                            <br> Titel: ". $row["Titel"]."
                            <br> Tid: ".$row["Tid"]."
                            <br> Datum: ". $row["Datum"]."
                            <br> Meddelande: ". $row["Meddelande"]."                  
                        </div>";
                }
            }      
            else
            {
                echo "Det finns inget meddelande att visa!";
            }

             $conn->close();
        ?>
    </div>
</html>