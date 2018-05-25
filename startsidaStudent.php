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
                    <!--Här är vår filtreringslista-->
					<form method="POST" action="filtreraEvenemang.php">
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
            /*om ingea session är set, alltså om inget har filtreras görs detta*/
			if (!isset($_SESSION['pub']) && !isset($_SESSION['klubb']) && !isset($_SESSION['lunch']) && !isset($_SESSION['frukost']) && !isset($_SESSION['restaurang']) && !isset($_SESSION['brunch']) && !isset($_SESSION['slapp']) && !isset($_SESSION['gasque']) && !isset($_SESSION['konsert']) && !isset($_SESSION['ovrigt']) && !isset($_SESSION['allaevenemang'])
				 && !isset($_SESSION['gotland']) && !isset($_SESSION['gh']) && !isset($_SESSION['gbg']) && !isset($_SESSION['kalmar']) && !isset($_SESSION['norrland']) && !isset($_SESSION['smaland']) && !isset($_SESSION['stocken']) && !isset($_SESSION['snerike']) && !isset($_SESSION['upland']) && !isset($_SESSION['varmland']) && !isset($_SESSION['vg']) && !isset($_SESSION['vdala']) && !isset($_SESSION['og']))
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
			
			else if (isset($_SESSION['allaevenemang']))
			{
				$valjevenemang = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang";
				$hamtaevenemang = mysqli_query($conn, $valjevenemang);
				$kontrollalla = mysqli_num_rows($hamtaevenemang);
				if ($kontrollalla > 0)
				{
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
						unset($_SESSION['allaevenemang']);
				
					}
				}
				else
				{
					unset($_SESSION['allaevenemang']);
				}
				
				
			}
				
			/*om pub väljs att filtrera görs detta*/
			else if (isset($_SESSION['pub']))
			{
				/*hämtar ut allt från evenemang som stämmer in på typen pub*/
				$valjpub = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Pub'";
				$hamtapub = mysqli_query($conn, $valjpub);
				$pubkontroll = mysqli_num_rows($hamtapub);
				if ($pubkontroll > 0)
				{
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
						//unsetar sessionen för pub
						unset($_SESSION['pub']);
					
					}
				}
				else
				{
					unset($_SESSION['pub']);
				}
				
			}
            /*om klubb väljs att filtrera görs detta*/
            else if (isset($_SESSION['klubb']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen klubb*/
                $valjklubb = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Klubb'";
                $hamtaklubb = mysqli_query($conn, $valjklubb);
				$klubbkontroll = mysqli_num_rows($hamtaklubb);
				if ($klubbkontroll > 0)
				{ 
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
						//unsetar session klubb
						unset($_SESSION['klubb']);                    
					}
					
				}
				else
				{
					unset($_SESSION['klubb']);
				}
              
            }
            /*om lunch väljs att filtrera görs detta*/
            else if (isset($_SESSION['lunch']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen lunch*/
                $valjlunch = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Lunch'";
                $hamtalunch = mysqli_query($conn, $valjlunch);
				$lunchkontroll = mysqli_num_rows($hamtalunch);
				if ($lunchkontroll > 0)
				{
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
						//unsetar session lunch
						unset($_SESSION['lunch']);                    
					}
				}
				else
				{
					unset($_SESSION['lunch']);
				}
                
            }
            /*om frukost väljs att filtrera görs detta*/
            else if (isset($_SESSION['frukost']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen frukost*/
                $valjfrukost = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Frukost'";
                $hamtafrukost = mysqli_query($conn, $valjfrukost);
				$frukostkontroll = mysqli_num_rows($hamtafrukost);
				if ($frukostkontroll > 0)
				{
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
						//unsetar session frukost
						unset($_SESSION['frukost']);                    
					}
				}
				else
				{
					unset($_SESSION['frukost']);
				}
                
            }
            /*om restaurang väljs att filtrera görs detta*/
            else if (isset($_SESSION['restaurang']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen restaurang*/
                $valjrestaurang = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Restaurang'";
                $hamtarestaurang = mysqli_query($conn, $valjrestaurang);
				$restaurangkontroll = mysqli_num_rows($hamtarestaurang);
				if ($restaurangkontroll > 0)
				{
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
						//unsetar session restaurang
						unset($_SESSION['restaurang']);                    
					}
				}
				else
				{
					unset($_SESSION['restaurang']);
				}
                
            }
            /*om brunch väljs att filtrera görs detta*/
            else if (isset($_SESSION['brunch']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen brunch*/
                $valjbrunch = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Brunch'";
                $hamtabrunch = mysqli_query($conn, $valjbrunch);
				$brunchkontroll = mysqli_num_rows($hamtabrunch);
				if ($brunchkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtabrunch))
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
						//unsetar session brunch
						unset($_SESSION['brunch']);                    
					}
				}
				else
				{
					unset($_SESSION['brunch']);
				}
                
            }
            /*om släpp väljs att filtrera görs detta*/
            else if (isset($_SESSION['slapp']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen släpp*/
                $valjslapp = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Släpp'";
                $hamtaslapp = mysqli_query($conn, $valjslapp);
				$slappkontroll = mysqli_num_rows($hamtaslapp);
				if ($slappkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaslapp))
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
						//unsetar session släpp
						unset($_SESSION['slapp']);                    
					}
				}
				else
				{
					unset($_SESSION['slapp']);
				}
                
            }
            /*om Gasque väljs att filtrera görs detta*/
            else if (isset($_SESSION['gasque']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen gasque*/
                $valjgasque = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Gasque'";
                $hamtagasque = mysqli_query($conn, $valjgasque);
				$gasquekontroll = mysqli_num_rows($hamtagasque);
				if ($gasquekontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagasque))
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
						//unsetar session gasque
						unset($_SESSION['gasque']);                    
					}
				}
				else
				{
					unset($_SESSION['gasque']);
				}
                
            }
            /*om konsert väljs att filtrera görs detta*/
            else if (isset($_SESSION['konsert']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen konsert*/
                $valjkonsert = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Konsert'";
                $hamtakonsert = mysqli_query($conn, $valjkonsert);
				$konsertkontroll = mysqli_num_rows($hamtakonsert);
				if ($konsertkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtakonsert))
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
						//unsetar session konsert
						unset($_SESSION['konsert']);                    
					}
				}
				else
				{
					unset($_SESSION['konsert']);
				}
                
            }
            /*om övrigt väljs att filtrera görs detta*/
            else if (isset($_SESSION['ovrigt']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen övrigt*/
                $valjovrigt = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Övrigt'";
                $hamtaovrigt = mysqli_query($conn, $valjovrigt);
				$ovrigtkontroll = mysqli_num_rows($hamtaovrigt);
				if ($ovrigtkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaovrigt))
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
						//unsetar session övrigt
						unset($_SESSION['ovrigt']);                    
					}
				}
				else
				{
					unset($_SESSION['ovrigt']);
				}
                
            }
			else if (isset($_SESSION['gotland']))
			{
				$valjgotland = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Gotlands Nation'";
				$hamtagotland = mysqli_query($conn, $valjgotland);
				$kontrollgotland = mysqli_num_rows($hamtagotland);
				if ($kontrollgotland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagotland))
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
						unset($_SESSION['gotland']);
				
					}
				}
				else
				{
					unset($_SESSION['gotland']);
				}
				
				
			}
			
			else if (isset($_SESSION['gh']))
			{
				$valjgh = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Gastrike-Halsinge Nation'";
				$hamtagh = mysqli_query($conn, $valjgh);
				$kontrollgh = mysqli_num_rows($hamtagh);
				if ($kontrollgh > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagh))
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
						unset($_SESSION['gh']);
				
					}
				}
				else
				{
					unset($_SESSION['gh']);
				}
				
				
			}
			
			else if (isset($_SESSION['gbg']))
			{
				$valjgbg = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Goteborgs Nation'";
				$hamtagbg = mysqli_query($conn, $valjgbg);
				$kontrollgbg = mysqli_num_rows($hamtagbg);
				if ($kontrollgbg > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagbg))
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
						unset($_SESSION['gbg']);
				
					}
				}
				else
				{
					unset($_SESSION['gbg']);
				}
				
				
			}
			
			else if (isset($_SESSION['kalmar']))
			{
				$valjkalmar = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Kalmars Nation'";
				$hamtakalmar = mysqli_query($conn, $valjkalmar);
				$kontrollkalmar = mysqli_num_rows($hamtakalmar);
				if ($kontrollkalmar > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtakalmar))
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
						unset($_SESSION['kalmar']);
				
					}
				}
				else
				{
					unset($_SESSION['kalmar']);
				}
				
				
			}
			
			else if (isset($_SESSION['norrland']))
			{
				$valjnorrland = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Norrlands Nation'";
				$hamtanorrland = mysqli_query($conn, $valjnorrland);
				$kontrollnorrland = mysqli_num_rows($hamtanorrland);
				if ($kontrollnorrland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtanorrland))
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
						unset($_SESSION['norrland']);
				
					}
				}
				else
				{
					unset($_SESSION['norrland']);
				}
				
				
			}
			
			else if (isset($_SESSION['smaland']))
			{
				$valjsmaland = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Smalands Nation'";
				$hamtasmaland = mysqli_query($conn, $valjsmaland);
				$kontrollsmaland = mysqli_num_rows($hamtasmaland);
				if ($kontrollsmaland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtasmaland))
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
						unset($_SESSION['smaland']);
				
					}
				}
				else
				{
					unset($_SESSION['smaland']);
				}
				
				
			}
			
			else if (isset($_SESSION['stocken']))
			{
				$valjstocken = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Stockholms Nation'";
				$hamtastocken = mysqli_query($conn, $valjstocken);
				$kontrollstocken = mysqli_num_rows($hamtastocken);
				if ($kontrollstocken > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtastocken))
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
						unset($_SESSION['stocken']);
				
					}
				}
				else
				{
					unset($_SESSION['stocken']);
				}
			}	
				
			else if (isset($_SESSION['snerike']))
			{
				$valjsnerike = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Sodermanlands-Nerikes Nation'";
				$hamtasnerike = mysqli_query($conn, $valjsnerike);
				$kontrollsnerike = mysqli_num_rows($hamtasnerike);
				if ($kontrollsnerike > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtasnerike))
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
						unset($_SESSION['snerike']);
				
					}
				}
				else
				{
					unset($_SESSION['snerike']);
				}
				
				
			}
			
			else if (isset($_SESSION['upland']))
			{
				$valjupland = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Uplands Nation'";
				$hamtaupland = mysqli_query($conn, $valjupland);
				$kontrollupland = mysqli_num_rows($hamtaupland);
				if ($kontrollupland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaupland))
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
						unset($_SESSION['upland']);
				
					}
				}
				else
				{
					unset($_SESSION['upland']);
				}
				
				
			}
			
			else if (isset($_SESSION['varmland']))
			{
				$valjvarmland = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Varmlands Nation'";
				$hamtavarmland = mysqli_query($conn, $valjvarmland);
				$kontrollvarmland = mysqli_num_rows($hamtavarmland);
				if ($kontrollvarmland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtavarmland))
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
						unset($_SESSION['varmland']);
				
					}
				}
				else
				{
					unset($_SESSION['varmland']);
				}
				
				
			}
			
			else if (isset($_SESSION['vg']))
			{
				$valjvg = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Vastgota Nation'";
				$hamtavg = mysqli_query($conn, $valjvg);
				$kontrollvg = mysqli_num_rows($hamtavg);
				if ($kontrollvg > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtavg))
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
						unset($_SESSION['vg']);
				
					}
				}
				else
				{
					unset($_SESSION['vg']);
				}
				
				
			}
			
			else if (isset($_SESSION['vdala']))
			{
				$valjvdala = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Vastmanlands-Dala Nation'";
				$hamtavdala = mysqli_query($conn, $valjvdala);
				$kontrollvdala = mysqli_num_rows($hamtavdala);
				if ($kontrollvdala > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtavdala))
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
						unset($_SESSION['vdala']);
				
					}
				}
				else
				{
					unset($_SESSION['vdala']);
				}
				
				
			}
			
			else if (isset($_SESSION['og']))
			{
				$valjog = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Ostgota Nation'";
				$hamtaog = mysqli_query($conn, $valjog);
				$kontrollog = mysqli_num_rows($hamtaog);
				if ($kontrollog > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaog))
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
						unset($_SESSION['og']);
				
					}
				}
				else
				{
					unset($_SESSION['og']);
				}
				
				
			}
				
				
			

		?>
		</div>
		
		 <!--Denna div (nationsMeny) listar alla nationer vertikalt för filtrering.-->
        <div class="bakgrundmeny">
            <div class="nationsMeny">
				<form method="POST" action="filtreraNation.php">
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
