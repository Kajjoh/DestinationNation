<?php
	session_start();
	if (isset($_SESSION['user']))
	{
		echo "Välkommen: {$_SESSION['user']}";
	}
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "projekt";

    // Create connection to database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection with database
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
	
?>
<!DOCTYPE html>
<html>

    <head>
        <title>DestinationNation</title>
        <link rel="stylesheet" href="html/main.css">
        <meta charset="utf-8">
    </head>
    
    <body>


    <?php
        /*include('html/sidhuvud.html');

        include('html/meny.html');*/
        
        include('html/sidhuvud.html');

        include('html/menyStudent.html');
    ?>

        
        
          <!--denna div (filter) listar horisontellt alla aktiviteter för nationer för filtrering.-->
        <div class="backgrundMeny">   
          <div id="filter">
                <ul id="filterlista">
					<form method="POST" action="filtreraEvenemang.php">
                    <li id="aktiviteter"><input type="submit" name="pubKnapp" id="pubKnapp" value="Pub"></li>
                    <li id="aktiviteter"><input type="submit" name="klubbKnapp" id="klubbKnapp" value="Klubb"></li>
                    <li id="aktiviteter"><input type="submit" name="lunchKnapp" id="lunchKnapp" value ="Lunch"></li>
                    <li id="aktiviteter"><input type="submit" name="frukostKnapp" id="frukostKnapp" value="Frukost"></li>
                    <li id="aktiviteter"><input type="submit" name="restaurangKnapp" id="restaurangKnapp" value="Restaurang"></li>
                    <li id="aktiviteter"><input type="submit" name="brunchKnapp" id="brunchKnapp" value="Brunch"></li>
                    <li id="aktiviteter"><input type="submit" name="slappKnapp" id="slappKnapp" value="Släpp"></li>
                    <li id="aktiviteter"><input type="submit" name="gasqueKnapp" id="gasqueKnapp" value="Gasque"></li>
                    <li id="aktiviteter"><input type="submit" name="konsertKnapp" id="konsertKnapp" value="Konsert"></li>
                    <li id="aktiviteter"><input type="submit" name="ovrigtKnapp" id="ovrigtKnapp" value="Övrigt"></li>
					</form>
                </ul>
            </div>
        </div> 
		<div align="center">	
		<?php
			if (!isset($_SESSION['pub']) && !isset($_SESSION['klubb']) && !isset($_SESSION['lunch']) && !isset($_SESSION['frukost']) && !isset($_SESSION['restaurang']) && !isset($_SESSION['brunch']) && !isset($_SESSION['slapp']) && !isset($_SESSION['gasque']) && !isset($_SESSION['konsert']) && !isset($_SESSION['ovrigt']))
			{
				$valjevenemang = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang";
				$hamtaevenemang = mysqli_query($conn, $valjevenemang);
				while ($row = mysqli_fetch_assoc($hamtaevenemang))
				{
					echo "titel: ".$row['titel'];
					echo "typ: ".$row['typ'];
					echo "från: ".$row['fran'];
					echo "till: ".$row['till'];
					echo "datum: ".$row['datum'];
					echo "krav: ".$row['krav'];
					echo "beskrivning: ".$row['beskrivning'];
					echo "plats: ".$row['plats'];
					echo "nation: ".$row['nation'];
				
				}
			}
			
			if (isset($_SESSION['pub']))
			{
				
				$valjpub = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Pub'";
				$hamtapub = mysqli_query($conn, $valjpub);
				while ($row = mysqli_fetch_assoc($hamtapub))
				{
					echo "titel: ".$row['titel'];
					echo "typ: ".$row['typ'];
					echo "från: ".$row['fran'];
					echo "till: ".$row['till'];
					echo "datum: ".$row['datum'];
					echo "krav: ".$row['krav'];
					echo "beskrivning: ".$row['beskrivning'];
					echo "plats: ".$row['plats'];
					echo "nation: ".$row['nation'];
					unset($_SESSION['pub']);
					
				}
				
			}
            else if (isset($_SESSION['klubb']))
            {
                
                $valjklubb = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Klubb'";
                $hamtaklubb = mysqli_query($conn, $valjklubb);
                while ($row = mysqli_fetch_assoc($hamtaklubb))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['klubb']);                    
                }
            }
            else if (isset($_SESSION['lunch']))
            {
                
                $valjlunch = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Lunch'";
                $hamtalunch = mysqli_query($conn, $valjlunch);
                while ($row = mysqli_fetch_assoc($hamtalunch))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['lunch']);                    
                }
            }
            else if (isset($_SESSION['frukost']))
            {
                
                $valjfrukost = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Frukost'";
                $hamtafrukost = mysqli_query($conn, $valjfrukost);
                while ($row = mysqli_fetch_assoc($hamtafrukost))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['frukost']);                    
                }
            }
            else if (isset($_SESSION['restaurang']))
            {
                
                $valjrestaurang = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Restaurang'";
                $hamtarestaurang = mysqli_query($conn, $valjrestaurang);
                while ($row = mysqli_fetch_assoc($hamtarestaurang))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['restaurang']);                    
                }
            }
            else if (isset($_SESSION['brunch']))
            {
                
                $valjbrunch = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Brunch'";
                $hamtarbrunch = mysqli_query($conn, $valjbrunch);
                while ($row = mysqli_fetch_assoc($hamtarbrunch))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['brunch']);                    
                }
            }
            else if (isset($_SESSION['slapp']))
            {
                
                $valjslapp = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Släpp'";
                $hamtarslapp = mysqli_query($conn, $valjslapp);
                while ($row = mysqli_fetch_assoc($hamtarslapp))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['slapp']);                    
                }
            }
            else if (isset($_SESSION['gasque']))
            {
                
                $valjgasque = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Gasque'";
                $hamtargasque = mysqli_query($conn, $valjgasque);
                while ($row = mysqli_fetch_assoc($hamtargasque))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['gasque']);                    
                }
            }
            else if (isset($_SESSION['konsert']))
            {
                
                $valjkonsert = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Konsert'";
                $hamtarkonsert = mysqli_query($conn, $valjkonsert);
                while ($row = mysqli_fetch_assoc($hamtarkonsert))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['konsert']);                    
                }
            }
            else if (isset($_SESSION['ovrigt']))
            {
                
                $valjovrigt = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Övrigt'";
                $hamtarovrigt = mysqli_query($conn, $valjovrigt);
                while ($row = mysqli_fetch_assoc($hamtarovrigt))
                {
                    echo "titel: ".$row['titel'];
                    echo "typ: ".$row['typ'];
                    echo "från: ".$row['fran'];
                    echo "till: ".$row['till'];
                    echo "datum: ".$row['datum'];
                    echo "krav: ".$row['krav'];
                    echo "beskrivning: ".$row['beskrivning'];
                    echo "plats: ".$row['plats'];
                    echo "nation: ".$row['nation'];
                    unset($_SESSION['ovrigt']);                    
                }
            }

		?>
		</div>
        <!--<div class ="ssFlode">
            <div class = "innerSSflode">
                <h3 id = "ssRubrik">Evenemang</h3>

                <div class = "event">
                    <p>
                        OCaml pluggstuga!
                        <br>
                        Tid: 18:00 - 22:00
                        <br>
                        Datum: 24/5 - 18
                        <br>
                        Plats: Östgöta nation
                        <br>
                        Välkomna till årets OCaml pluggstuga! 
                        Vi kommer bjuda på goda hamburgare och dricka kommer kunna köpas
                        i baren. Kalle Karlsson kommer gå igenom syntax, olika funktioner
                        och kommer att kunna svara på frågor. 
                        <br>
                        Hoppas vi ses!
                    </p>
                </div>

                <div class = "event">
                    <p>
                        Spring med GH!
                        <br>
                        Tid: 16:00 - 18:00
                        <br>
                        Datum: 16/4 - 18
                        <br>
                        Plats: Stadsskogen
                        <br>
                        Kom och spring med oss i Stadsskogen! Rundan är på 
                        5 km och man springer helt i sin egen takt. Man får 
                        frukt och vatten som diplom.
                    </p>
                </div>

            </div>
        </div>-->

        <!--Denna div (nationsMeny) listar alla nationer vertikalt för filtrering.-->
        <div class="bakgrundmeny">
            <div class="nationsMeny">
                <a id="nationsattr" href="#">Gotlands nation</a>
                <a id="nationsattr" href="#">Gästrike-Hälsinge nation</a>
                <a id="nationsattr" href="#">Göteborgs nation</a>
                <a id="nationsattr" href="#">Kalmars nation</a>
                <a id="nationsattr" href="#">Norrlands nation</a>
                <a id="nationsattr" href="#">Smålands nation</a>
                <a id="nationsattr" href="#">Stockholms nation</a>
                <a id="nationsattr" href="#">Södermanlands-Nerikes nation</a>
                <a id="nationsattr" href="#">Uplands nation</a>
                <a id="nationsattr" href="#">Värmlands nation</a>
                <a id="nationsattr" href="#">Västgöta nation</a>
                <a id="nationsattr" href="#">Västmanlands-Dala nation</a>
                <a id="nationsattr" href="#">Östgöta nation</a>
            </div>
        </div>


        <?php
            include('html/sidfot.html');
        ?>

    </body>
</html>
