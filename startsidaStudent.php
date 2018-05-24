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
        include('html/sidhuvud.html');

        include('html/meny.html');
    ?>

        
        
          <!--denna div (filter) listar horisontellt alla aktiviteter för nationer för filtrering.-->
        <div class="backgrundMeny">   
          <div id="filter">
                <ul id="filterlista">
                    <li id="aktiviteter"><a id="attributAkt">Pub</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Klubb</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Lunch</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Frukost</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Restaurang</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Brunch</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Släpp</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Gasque</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Konsert</a></li>
                    <li id="aktiviteter"><a id="attributAkt">Övrigt</a></li>
                </ul>
            </div>
        </div> 
		<div align="center">	
		<?php
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
