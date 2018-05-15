<!DOCTYPE html>
<html>
<head>
    <title>DestinationNation</title>
    <link href="main.css" rel="stylesheet">
    <meta charset="UTF-8">
</head>
    
    <body>

        <!-- Det här är sidhuvudet, det ska ligga högst upp på varje sida. --> 
        <div id="sidhuvud">
            <img src="images/headbackground.jpg" alt="Red board" width=100% height="40">
        </div>

        <div id="header">
			<img src="images\logotest.jpg" class="logo"> 
    	</div>

        <!-- Här börjar innehållet. -->
        <div id="rubrikRegistrering">
            <h3> Registrera ett konto:</h3>
        </div>

        <div class="formular">

        <!-- Här börjar formuläret för att registrera sig.    --> 
        <form name="registrera" method="POST" action="registreringsprocess.php" onsubmit="sendForm()">
            
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

        <!-- Här följer sidfoten som ska ligga på alla sidor. --> 
        <div id="sidfot">

            <div class="nationsloggor">
                <img src="images/logo-gh.jpg" alt="gh" width="100" height="100">
                <img src="images/logo-goteborgs.jpg" alt="gote" width="75" height="85">
                <img src="images/logo-gotlands.jpg" alt="got" width="90" height="90">
                <img src="images/logo-norrlands.jpg" alt="norr" width="90" height="90">
                <img src="images/logo-og.jpg" alt="og" width="85" height="90">
                <img src="images/logo-smalands.jpg" alt="sma" width="100" height="90">
                <img src="images/logo-snerikes.jpg" alt="sner" width="90" height="100">
                <img src="images/logo-stockholms.jpg" alt="stock" width="90" height="90">
                <img src="images/logo-uplands.jpg" alt="up" width="90" height="90">
                <img src="images/logo-varmlands.jpg" alt="varm" width="90" height="90">
                <img src="images/logo-vdala.jpg" alt="vd" width="90" height="90">
                <img src="images/logo-vg.jpg" alt="vg" width="70" height="90">
                <img src="images/logo-kal.png" alt="Kalmar" width="80" height="90">
            </div>

            <div id="footer">
                <img src="images/headbackground.jpg" alt="Red board" width=100% height="20">
            </div>
    
        </div>
		<script src="registrering.js"></script>
    </body>
</html>
