<?php
	session_start();
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

        include('html/menyNation.html');
    ?>
        
          <!--denna div (filter) listar horisontellt alla aktiviteter för nationer för filtrering.-->
        <div class="backgrundMeny">   
          <div id="filter">
                <ul id="filterlista">
                    <!--Här är vår filtreringslista-->
					<form method="POST" action="process/filtreraEvenemangNation-process.php">
						<li id="aktiviteter"><input type="submit" name="allaEvKnapp" id="allaEvKnapp" value="Alla evenemang"></li>
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
				include('process/startsida-process.php');
			?>
		</div>
		
		 <!--Denna div (nationsMeny) listar alla nationer vertikalt för filtrering.-->
        <div class="bakgrundmeny">
            <div class="nationsMeny">
				<form method="POST" action="process/ssNationFiltreraNation.php">
					<ul>
						<li id="nationsattr"><input type="submit" name="gotlandsKnapp" id="gotlandsKnapp" value="Gotlands Nation"></li>
						<li id="nationsattr"><input type="submit" name="ghKnapp" id="ghKnapp" value="Gästrike-Hälsinge Nation"></li>
						<li id="nationsattr"><input type="submit" name="gbgKnapp" id="gbgKnapp" value="Göteborgs Nation"></li>
						<li id="nationsattr"><input type="submit" name="kalmarsKnapp" id="kalmarsKnapp" value="Kalmars Nation"></li>
						<li id="nationsattr"><input type="submit" name="norrlandsKnapp" id="norrlandsKnapp" value="Norrlands Nation"></li>
						<li id="nationsattr"><input type="submit" name="smalandsKnapp" id="smalandsKnapp" value="Smålands Nation"></li>
						<li id="nationsattr"><input type="submit" name="stockenKnapp" id="stockenKnapp" value="Stockholms Nation"></li>
						<li id="nationsattr"><input type="submit" name="snerikesKnapp" id="snerikesKnapp" value="Södermanlands-Nerikes Nation"></li>
						<li id="nationsattr"><input type="submit" name="uplandsKnapp" id="uplandsKnapp" value="Uplands Nation"></li>
						<li id="nationsattr"><input type="submit" name="varmlandsKnapp" id="varmlandsKnapp" value="Värmlands Nation"></li>
						<li id="nationsattr"><input type="submit" name="vgKnapp" id="vgKnapp" value="Västgöta Nation"></li>
						<li id="nationsattr"><input type="submit" name="vdalaKnapp" id="vdalaKnapp" value="Västmanland-Dala Nation"></li>
						<li id="nationsattr"><input type="submit" name="ogKnapp" id="ogKnapp" value="Östgöta Nation"></li>
					</ul>
				</form>		
            </div>
        </div>

        <?php
            include('html/sidfot.html');
        ?>

    </body>
</html>
