<?php
	session_start();
	if (!isset($_SESSION['nation']))
	{
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>DestinationNation</title>
        <link rel="stylesheet" href="html/main.css">
        <meta charset="UTF-8">
    </head>
    
    <body>


    <?php
        include('html/sidhuvud.html');

        include('html/menyNation.html');
    ?>
        
          <!--denna div (filter) listar horisontellt alla aktiviteter för nationer för filtrering.-->
		<div class="back">
		<div id="nationsession">
			<?php
				if (isset($_SESSION['nation']))
				{
					echo "Inloggad som: " . $_SESSION['nation'];
				}
			?>
		</div>	
          	<div id="filter">
					<form method="POST" action="process/filtreraEvenemangNation-process.php">
						<p id="aktiviteter"><input type="submit" name="allaEvKnapp" class="knappAktmeny" value="Alla evenemang"></p>
						<p id="aktiviteter"><input type="submit" name="pubKnapp" class="knappAktmeny" value="Pub"></p>
						<p id="aktiviteter"><input type="submit" name="klubbKnapp" class="knappAktmeny" value="Klubb"></p>
						<p id="aktiviteter"><input type="submit" name="lunchKnapp" class="knappAktmeny" value ="Lunch"></p>
						<p id="aktiviteter"><input type="submit" name="frukostKnapp" class="knappAktmeny" value="Frukost"></p>
						<p id="aktiviteter"><input type="submit" name="restaurangKnapp" class="knappAktmeny" value="Restaurang"></p>
						<p id="aktiviteter"><input type="submit" name="brunchKnapp" class="knappAktmeny" value="Brunch"></p>
						<p id="aktiviteter"><input type="submit" name="slappKnapp" class="knappAktmeny" value="Släpp"></p>
						<p id="aktiviteter"><input type="submit" name="gasqueKnapp" class="knappAktmeny" value="Gasque"></p>
						<p id="aktiviteter"><input type="submit" name="konsertKnapp" class="knappAktmeny" value="Konsert"></p>
						<p id="aktiviteter"><input type="submit" name="ovrigtKnapp" class="knappAktmeny" value="Övrigt"></p>
					</form>
            </div>
        </div>
		
		<div class="eventFlode">
			
			<h2>Evenemangsflöde</h2>
			<?php
				include('process/startsidaNatTjanst-process.php');
			?>
		</div>
		
		 <!--Denna div (nationsMeny) listar alla nationer vertikalt för filtrering.-->
			<div class="nationsMeny">
				<form method="POST" action="process/filtreraNationNation-process.php">
					<div class="nationsattr"><input type="submit" name="gotlandsKnapp" class="knappNationsmeny" value="Gotlands Nation"></div>
					<div class="nationsattr"><input type="submit" name="ghKnapp" class="knappNationsmeny" value="Gästrike-Hälsinge Nation"></div>
					<div class="nationsattr"><input type="submit" name="gbgKnapp" class="knappNationsmeny" value="Göteborgs Nation"></div>
					<div class="nationsattr"><input type="submit" name="kalmarsKnapp" class="knappNationsmeny" value="Kalmars Nation"></div>
					<div class="nationsattr"><input type="submit" name="norrlandsKnapp" class="knappNationsmeny" value="Norrlands Nation"></div>
					<div class="nationsattr"><input type="submit" name="smalandsKnapp" class="knappNationsmeny" value="Smålands Nation"></div>
					<div class="nationsattr"><input type="submit" name="stockenKnapp" class="knappNationsmeny" value="Stockholms Nation"></div>
					<div class="nationsattr"><input type="submit" name="snerikesKnapp" class="knappNationsmeny" value="Södermanlands-Nerikes Nation"></div>
					<div class="nationsattr"><input type="submit" name="uplandsKnapp" class="knappNationsmeny" value="Uplands Nation"></div>
					<div class="nationsattr"><input type="submit" name="varmlandsKnapp" class="knappNationsmeny" value="Värmlands Nation"></div>
					<div class="nationsattr"><input type="submit" name="vgKnapp" class="knappNationsmeny" value="Västgöta Nation"></div>
					<div class="nationsattr"><input type="submit" name="vdalaKnapp" class="knappNationsmeny" value="Västmanland-Dala Nation"></div>
					<div class="nationsattr"><input type="submit" name="ogKnapp" class="knappNationsmeny" value="Östgöta Nation"></div>
				</form>		
            </div>
        

        <?php
            include('html/sidfot.html');
        ?>

    </body>
</html>
