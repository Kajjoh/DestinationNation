<?php
 
    include('connection.php');
	
	$anvandare = $_SESSION['student'];
	$valjstudid = "SELECT studID FROM registrering WHERE mail = '$anvandare'";
	$hamtastudid = mysqli_query($conn, $valjstudid);
	$kontrollstudid = mysqli_num_rows($hamtastudid);
	$studid = "";
    
	
	if ($kontrollstudid > 0)
	{
		while ($row = mysqli_fetch_assoc($hamtastudid))
		{
			$studid = $row['studID'];
		}
		
	}
	$sql = "SELECT titel, typ, nation, datum, fran, till, krav, plats FROM sparaevenemang WHERE studID = '$studid'";
	$result = mysqli_query($conn, $sql);
	$resultkontroll = mysqli_num_rows($result);
	
	if($resultkontroll > 0)
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
                    <br> Krävs anmälan? " .$row["krav"]."
				  </div>";
		}
	} 
 
	
		
	
	     
    else
    {
        echo "Du har inga sparade evenemang!";
    }
     
    $conn->close();
?>