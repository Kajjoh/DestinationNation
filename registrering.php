<?php
  $uname = "root";
  $pass = "";
  $host = "localhost";
  $dbname = "projekt";
  
    $connection = new mysqli($host, $uname, $pass, $dbname);
	if ($connection->connect_error)
	{  
		die("Connection failed: ".$connection.connect_error);
	}
?>	
<!DOCTYPE html>
<html>
<head>
    <title>DestinationNation</title>
    <link href="main.css" rel="stylesheet">
    <meta charset="UTF-8">
</head>
    
    <body>

        <?php
            include('sidhuvud.html');
        ?>

        <!-- Här börjar innehållet. -->
        <div id="rubrikRegistrering">
            <h3> Registrera ett konto:</h3>
        </div>

        <div class="formular">

        <!-- Här börjar formuläret för att registrera sig.    --> 
        <form name="registrera" method="POST" action="registreringsprocess.php">
            
            <p class="boxes">
                <label for="prsnummer">Personnummer:<br></label>
                <input id="regbox" type="text" placeholder="ÅÅMMDD-XXXX" name="personnummer">
            </p>

            <p class="boxes">
                <label for="studentId">Student-id:<br/></label> 
                <input id="regbox" type="text" placeholder="xxxx xxxx" name="sId">
            </p>

            <p class="boxes">
                <label for="fenamn">För- och efternamn:<br/></label>
                <input id="regbox" type="text"  name="namn">
            </p>

            <p class="boxes">
                <label for="mail">E-mail:<br/></label>
                <input id="regbox" type="text" placeholder="namn@exempel.se" name="email">
            </p>

            <p class="boxes">
                <label for="adress">Adress:<br/></label>
                <input id="regbox" type="text" name="adress">
            </p>

            <p class="boxes">
                <label for="ort">Ort:<br/></label>
                <input id="regbox" type="text" name="ort">
            </p>

            <p class="boxes">
                <label for="postnummr">Postnummer:<br/></label>
                <input id="regbox" type="text" name="postnummr">
            </p>

            <p>
                <input type="submit" value="Registrera" id="submitBtn" class="button">
            </p>         
        </form>

        </div>

        <?php
            include('sidfot.html');
        ?>

		<script src="registrering.js"></script>
    </body>
</html>
