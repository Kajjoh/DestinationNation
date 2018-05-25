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
		include('html/menyNation.html');
    ?>

        
        
        <form id="skapaEvNation" action="SkapaEv.php">
			<input type="submit" id="skapaEvKnapp" id value="Skapa Evenemang"/>
		<form/>	

        <div class ="startnationFlode">
            <div class = "innernationflode">
                <h3 id = "startnatioRubrik">Evenemang</h3>

                <div id="startsidaEv">
                <?php
                    include('process/startsidaNation-process.php');
                ?>
                </div>

                <!--<div class = "event">
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
                </div>-->

            </div>
        </div>

        


        <?php
            include('html/sidfot.html');
        ?>

    </body>
</html>