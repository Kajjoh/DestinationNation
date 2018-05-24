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
		include ('html/menyLeverantor.html')
        
    ?>
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

        <div class ="ssFlode">
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
        </div>

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