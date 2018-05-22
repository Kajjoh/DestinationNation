<!DOCTYPE html>
<html>
    <head>
        <title>DestinationNation</title>
        <link href="html/main.css" rel="stylesheet">
        <meta charset="UTF-8">
    </head>
    
    <body>

        <?php
            include('html/sidhuvud.html');
        ?>

        <!-- Här börjar innehållet. -->
        <div class = "helaEvenemang">
            <div id="rubrikRegistrering">
                <h3> Registrera ett konto:</h3>
            </div>

            <div id="registrationForm">
                <form name="regForm" method="POST" action="regi-process.php" onsubmit="return (validateForm())">

                    <label for="namn">Personnummer</label><br>
                        <input type="text" name="prnr" id="prnr"><br>
            
                    <label for="namn">Student-id</label><br>
                        <input type="text" name="stid" id="stid"><br>

                    <label for="namn">Namn</label><br>
                        <input type="text" name="namn" id="namn"><br>

                    <label for="namn">E-mail</label><br>
                        <input type="text" name="mail" id="mail"><br>

                    <label for="namn">Adress</label><br>
                        <input type="text" name="adress" id="adress"><br>

                    <label for="namn">Ort</label><br>
                        <input type="text" name="ort" id="ort"><br>

                    <label for="namn">Postnummer</label><br>
                        <input type="text" name="pstnr" id="pstnr"><br>

                    <label for="losen">Lösenord</label><br>
                            <input type="password" placeholder="******" name="losen" id="losen"><br>
                    
                    <label for="upprepalosen">Upprepa lösenord</label><br>
                            <input type="password" placeholder="******" name="upprepalosen" id="upprepalosen"><br>

                    <input type="submit" value="Registrera!" id="submit">

                </form>
            
            </div>
        </div>

        <?php
            include('html/sidfot.html');
        ?>

        <script src="registrering.js"></script>
    </body>
</html>