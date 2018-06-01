<?php
	
	
    include('connection.php');
	$studentmail = $_SESSION['student'];
    $sql = "SELECT perNr, studID, namn, mail, adress, ort, postNr FROM student WHERE mail = '$studentmail'";
    $result = $conn->query($sql);

    $row=mysqli_fetch_assoc($result);
    echo "<div> <p class=persuppgRad>Personnummer: <br>". $row["perNr"]." </p>
                <p class=persuppgRad> Namn: <br>" .$row["namn"]." </p>
                <p class=persuppgRad>  Mail: <br>" .$row["mail"]." </p>
                <p class=persuppgRad> Adress: <br>" .$row["adress"]." </p>
                <p class=persuppgRad> Ort: <br>" .$row["ort"]." </p>
                <p class=persuppgRad> Postnummer: <br>" .$row["postNr"]." </p>      
            </div>";
     
    $conn->close();




?>