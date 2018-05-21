<!DOCTYPE html>
<html>

    <head>
        <title>DestinationNation</title>
        <link rel="stylesheet" href="main.css" />
        <meta charset="utf-8">
    </head>
    
    <body>

    <?php
        include('sidhuvud.php');
    ?>
        
        <!--Detta är menyn där man kan logga ut, gå till mina sidor etc.-->
        <div class="huvudMeny">
                <ul>
                  <li id="listaMeny"><a href="startsidaStudent.html">Start</a></li>
                  <li style="float:right" id="listaMeny"><a href="inloggning.html">Logga ut</a></li>
                  <li style="float:right"id="listaMeny"><a href="minaSidorStudent.html">Mina sidor</a></li>
                  <li style="float:right" id="listaMeny"><a href="OmOss.html">Om Oss</a></li>
                </ul>
            </div>



        <!--denna div (filter) listar horisontellt alla aktiviteter för nationer för filtrering.-->
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

        <!--Denna div (nationsMeny) listar alla nationer vertikalt för filtrering.-->
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

    </body>
</html>
