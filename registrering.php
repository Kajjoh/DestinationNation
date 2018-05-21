
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
            <form name="registrera" method="POST" action="registreringsprocess.php" onsubmit="return (validateForm())>
                
                    <label for="prsnummer">Personnummer:</label><br>
                        <input id="personnummer" type="text" placeholder="ÅÅMMDDXXXX" name="personnummer"><br>

                    <label for="studentId">Student-id:</label><br>
                        <input id="sID" type="text" placeholder="xxxx xxxx" name="sId"><br>

                    <label for="fenamn">För- och efternamn:</label><br>
                        <input id="namn" type="text"  name="namn"><br>

                    <label for="mail">E-mail:</label><br>
                        <input id="email" type="text" placeholder="namn@exempel.se" name="email"><br>
            
                    <label for="adress">Adress:</label><br>
                        <input id="adress" type="text" name="adress"><br>
                
                    <label for="ort">Ort:</label><br>
                        <input id="ort" type="text" name="ort"><br>
                
                    <label for="postnummr">Postnummer:</label><br>
                        <input id="postnummr" type="text" name="postnummr"><br>

                    <label for="losenord">Lösenord:</label><br>
                        <input type="password" name="userpass" id="userpass"><br>

                    <label for="upprepalosen">Upprepa lösenord:</label><br>
                        <input type="password" name="repeatpass" id="repeatpass"><br>
                
                    <input type="submit" value="Registrera" id="submitBtn" class="button"><br>
           
            </form>

        </div>

        <?php
            include('sidfot.html');
        ?>

		<script src="registrering.js"></script>
    </body>
</html>
