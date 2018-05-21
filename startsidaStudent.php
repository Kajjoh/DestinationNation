<!DOCTYPE html>
<html>

    <head>
        <title>DestinationNation</title>
        <link rel="stylesheet" href="main.css" />
        <meta charset="utf-8">
    </head>
    
    <body>

    <?php
        include('sidhuvud.html');
    ?>
        
        <!--Detta är menyn där man kan logga ut, gå till mina sidor etc.-->
        <div class="huvudMeny">
                <ul>
                  <li id="listaMeny"><a id="sidlankar" href="startsidaStudent.html">Start</a></li>
                  <li style="float:right" id="listaMeny"><a id="sidlankar" href="inloggning.html">Logga ut</a></li>
                  <li style="float:right"id="listaMeny"><a id="sidlankar" href="minaSidorStudent.html">Mina sidor</a></li>
                  <li style="float:right" id="listaMeny"><a id="sidlankar" href="OmOss.html">Om Oss</a></li>
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

        <?php
            include('sidfot.html');
        ?>

    </body>
</html>
