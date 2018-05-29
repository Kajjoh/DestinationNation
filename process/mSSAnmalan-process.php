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

    $sql = "SELECT anmID, eveID, namn, mail, kon, mat, allergi, dryck, sallskap FROM anmalan WHERE studID = '$studid'";
	$result = mysqli_query($conn, $sql);
	$resultkontroll = mysqli_num_rows($result);
	
	if($resultkontroll > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<div> 
                    <br>Anmälnings ID: ". $row["anmID"]."
					<br> Evenemangs ID: ".$row['eveID']."
                    <br> Namn: " . $row["namn"]. "
                    <br> Mail: ".$row["mail"]."
                    <br> Kön: ". $row["kon"]." 
                    <br> Mat " .$row["mat"]." 
                    <br> Allergi: " .$row["allergi"]."
                    <br> Dryck: " .$row["dryck"]."
                    <br> Sällskap: " .$row["sallskap"]."
				  <br></div>";
		}
	} 
    else
    {
        echo "Du har inga anmälda evenemang!";
    }

    $conn->close();
?>