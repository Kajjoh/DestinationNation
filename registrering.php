<?php
	session_start();
?>
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
			include('html/meny2.html');
        ?>

        <!-- Här börjar innehållet. -->
        <div class = "helaEvenemang">
            <div id="rubrikRegistrering">
                <h3> Registrera ett konto:</h3>
            </div>

            <div id="registrationForm">
                <form name="regForm" method="POST" action="process/regi-process.php" id="registreraform">
                	<!--onsubmit="return (validateForm()-->

                    <label for="namn">Personnummer</label><br>
                        <input type="text" placeholder="XXXXXX-XXXX" name="prnr" id="prnr"><br>
						<?php
							if (isset($_SESSION['ogiltigtprnr']))
							{
								echo $_SESSION['ogiltigtprnr'];
								unset($_SESSION['ogiltigtprnr']);
							}
						?><br>
            
                    <label for="namn">Student-id</label><br>
                        <input type="text" placeholder="XXXXXXXX" name="stid" id="stid"><br>
						<?php
							if (isset($_SESSION['ogiltigtstdid']))
							{
								echo $_SESSION['ogiltigtstdid'];
								unset($_SESSION['ogiltigtstdid']);
							}
						?><br>

                    <label for="namn">Namn</label><br>
                        <input type="text" placeholder="Ditt namn..." name="namn" id="namn"><br>
						<?php
							if (isset($_SESSION['tomtnamn']))
							{
								echo $_SESSION['tomtnamn'];
								unset($_SESSION['tomtnamn']);
							}
						?><br>

                    <label for="namn">E-mail</label><br>
                        <input type="text" placeholder="email@exempel.com" name="mail" id="mail"><br>
						<?php
							if (isset($_SESSION['emailmess']))
							{
								echo $_SESSION['emailmess'];
								unset($_SESSION['emailmess']);
							}
							else if (isset($_SESSION['upptagenemail']))
							{
								echo $_SESSION['upptagenemail'];
								unset($_SESSION['upptagenemail']);
							}
						?><br>

                    <label for="namn">Adress</label><br>
                        <input type="text" placeholder="Din adress..." name="adress" id="adress"><br>
						<?php
							if (isset($_SESSION['tomadress']))
							{
								echo $_SESSION['tomadress'];
								unset($_SESSION['tomadress']);
							}
						?><br>

                    <label for="namn">Ort</label><br>
                        <input type="text" placeholder="Din ort..." name="ort" id="ort"><br>
						<?php
							if (isset($_SESSION['tomort']))
							{
								echo $_SESSION['tomort'];
								unset($_SESSION['tomort']);
							}
						?><br>

                    <label for="namn">Postnummer</label><br>
                        <input type="text" placeholder="XXXXX" name="pstnr" id="pstnr"><br>
						<?php
							if (isset($_SESSION['ogiltigtpstnr']))
							{
								echo $_SESSION['ogiltigtpstnr'];
								unset($_SESSION['ogiltigtpstnr']);
							}
						?><br>

                    <label for="losen">Lösenord</label><br>
                            <input type="password" placeholder="******" name="losen" id="losen"><br>
							<?php
							if (isset($_SESSION['tomtlosen']))
							{
								echo $_SESSION['tomtlosen'];
								unset($_SESSION['tomtlosen']);
							}
						?><br>
                    
                    <label for="upprepalosen">Upprepa lösenord</label><br>
                            <input type="password" placeholder="******" name="upprepalosen" id="upprepalosen"><br>
							<?php
							if (isset($_SESSION['losenmatch']))
							{
								echo $_SESSION['losenmatch'];
								unset($_SESSION['losenmatch']);
							}
						?><br>

                    <input type="submit" value="Registrera!" id="submit">

                </form>
            
            </div>
        </div>

        <?php
            include('html/sidfot.html');
        ?>

        <script src="java/registrering.js"></script>
    </body>
</html>