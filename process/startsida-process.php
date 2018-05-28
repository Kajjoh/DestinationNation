<?php

include('connection.php');


            /*om ingea session är set, alltså om inget har filtreras görs detta*/
			if (!isset($_SESSION['pub']) && !isset($_SESSION['klubb']) && !isset($_SESSION['lunch']) && !isset($_SESSION['frukost']) && !isset($_SESSION['restaurang']) && !isset($_SESSION['brunch']) && !isset($_SESSION['slapp']) && !isset($_SESSION['gasque']) && !isset($_SESSION['konsert']) && !isset($_SESSION['ovrigt']) && !isset($_SESSION['allaevenemang'])
				 && !isset($_SESSION['gotland']) && !isset($_SESSION['gh']) && !isset($_SESSION['gbg']) && !isset($_SESSION['kalmar']) && !isset($_SESSION['norrland']) && !isset($_SESSION['smaland']) && !isset($_SESSION['stocken']) && !isset($_SESSION['snerike']) && !isset($_SESSION['upland']) && !isset($_SESSION['varmland']) && !isset($_SESSION['vg']) && !isset($_SESSION['vdala']) && !isset($_SESSION['og']))
			{
				$valjevenemang = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang";
				$hamtaevenemang = mysqli_query($conn, $valjevenemang);
				while ($row = mysqli_fetch_assoc($hamtaevenemang))
				{
					include('includeecho-filtrering-process.php');
				}
			}
			
			else if (isset($_SESSION['allaevenemang']))
			{
				$valjevenemang = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang";
				$hamtaevenemang = mysqli_query($conn, $valjevenemang);
				$kontrollalla = mysqli_num_rows($hamtaevenemang);
				if ($kontrollalla > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaevenemang))
					{
						include('includeecho-filtrering-process.php');
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
				$valjpub = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Pub'";
				$hamtapub = mysqli_query($conn, $valjpub);
				$pubkontroll = mysqli_num_rows($hamtapub);
				if ($pubkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtapub))
					{
					
						include('includeecho-filtrering-process.php');
						unset($_SESSION['pub']);
					
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Pub";
					unset($_SESSION['pub']);
				}
				
			}
            /*om klubb väljs att filtrera görs detta*/
            else if (isset($_SESSION['klubb']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen klubb*/
                $valjklubb = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Klubb'";
                $hamtaklubb = mysqli_query($conn, $valjklubb);
				$klubbkontroll = mysqli_num_rows($hamtaklubb);
				if ($klubbkontroll > 0)
				{ 
					while ($row = mysqli_fetch_assoc($hamtaklubb))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['klubb']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Klubb";
					unset($_SESSION['klubb']);
				}
			}
			
            /*om lunch väljs att filtrera görs detta*/
            else if (isset($_SESSION['lunch']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen lunch*/
                $valjlunch = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Lunch'";
                $hamtalunch = mysqli_query($conn, $valjlunch);
				$lunchkontroll = mysqli_num_rows($hamtalunch);
				if ($lunchkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtalunch))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['lunch']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Lunch";
					unset($_SESSION['lunch']);
				}    
			}
			
            /*om frukost väljs att filtrera görs detta*/
            else if (isset($_SESSION['frukost']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen frukost*/
                $valjfrukost = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Frukost'";
                $hamtafrukost = mysqli_query($conn, $valjfrukost);
				$frukostkontroll = mysqli_num_rows($hamtafrukost);
				if ($frukostkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtafrukost))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['frukost']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Frukost";
					unset($_SESSION['frukost']);
				}  
			}
			
            /*om restaurang väljs att filtrera görs detta*/
            else if (isset($_SESSION['restaurang']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen restaurang*/
                $valjrestaurang = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Restaurang'";
                $hamtarestaurang = mysqli_query($conn, $valjrestaurang);
				$restaurangkontroll = mysqli_num_rows($hamtarestaurang);
				if ($restaurangkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtarestaurang))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['restaurang']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Restaurang";
					unset($_SESSION['restaurang']);
				}   
			}
			
            /*om brunch väljs att filtrera görs detta*/
            else if (isset($_SESSION['brunch']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen brunch*/
                $valjbrunch = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Brunch'";
                $hamtabrunch = mysqli_query($conn, $valjbrunch);
				$brunchkontroll = mysqli_num_rows($hamtabrunch);
				if ($brunchkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtabrunch))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['brunch']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Brunch";
					unset($_SESSION['brunch']);
				}
			}
			
            /*om släpp väljs att filtrera görs detta*/
            else if (isset($_SESSION['slapp']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen släpp*/
                $valjslapp = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Släpp'";
                $hamtaslapp = mysqli_query($conn, $valjslapp);
				$slappkontroll = mysqli_num_rows($hamtaslapp);
				if ($slappkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaslapp))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['slapp']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Släpp";
					unset($_SESSION['slapp']);
				}   
			}
			
            /*om Gasque väljs att filtrera görs detta*/
            else if (isset($_SESSION['gasque']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen gasque*/
                $valjgasque = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Gasque'";
                $hamtagasque = mysqli_query($conn, $valjgasque);
				$gasquekontroll = mysqli_num_rows($hamtagasque);
				if ($gasquekontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagasque))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['gasque']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Gasque";
					unset($_SESSION['gasque']);
				} 
			}
			
            /*om konsert väljs att filtrera görs detta*/
            else if (isset($_SESSION['konsert']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen konsert*/
                $valjkonsert = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Konsert'";
                $hamtakonsert = mysqli_query($conn, $valjkonsert);
				$konsertkontroll = mysqli_num_rows($hamtakonsert);
				if ($konsertkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtakonsert))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['konsert']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Konsert";
					unset($_SESSION['konsert']);
				}   
			}
			
            /*om övrigt väljs att filtrera görs detta*/
            else if (isset($_SESSION['ovrigt']))
            {
                /*hämtar ut allt från evenemang som stämmer in på typen övrigt*/
                $valjovrigt = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE typ = 'Övrigt'";
                $hamtaovrigt = mysqli_query($conn, $valjovrigt);
				$ovrigtkontroll = mysqli_num_rows($hamtaovrigt);
				if ($ovrigtkontroll > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaovrigt))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['ovrigt']);                    
					}
				}
				else
				{
					echo "Det finns inga evenemang av typen: Övrigt";
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
						include('includeecho-filtrering-process.php');
						unset($_SESSION['gotland']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Gotlands just nu";
					unset($_SESSION['gotland']);
				}
			}
			
			else if (isset($_SESSION['gh']))
			{
				$valjgh = "SELECT titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Gästrike-Hälsinge Nation'";
				$hamtagh = mysqli_query($conn, $valjgh);
				$kontrollgh = mysqli_num_rows($hamtagh);
				if ($kontrollgh > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagh))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['gh']);
				
					}
				}
				else
				{
					echo "Det finns inga evenemang på Gästrike-Hälsinge just nu";
					unset($_SESSION['gh']);
				}	
			}
			
			else if (isset($_SESSION['gbg']))
			{
				$valjgbg = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Göteborgs Nation'";
				$hamtagbg = mysqli_query($conn, $valjgbg);
				$kontrollgbg = mysqli_num_rows($hamtagbg);
				if ($kontrollgbg > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtagbg))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['gbg']);				
					}
				}
				else
				{
					echo "Det finns inga evenemang på Göteborgs just nu";
					unset($_SESSION['gbg']);
				}	
			}
			
			else if (isset($_SESSION['kalmar']))
			{
				$valjkalmar = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Kalmars Nation'";
				$hamtakalmar = mysqli_query($conn, $valjkalmar);
				$kontrollkalmar = mysqli_num_rows($hamtakalmar);
				if ($kontrollkalmar > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtakalmar))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['kalmar']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Kalmars just nu";
					unset($_SESSION['kalmar']);
				}	
			}
			
			else if (isset($_SESSION['norrland']))
			{
				$valjnorrland = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Norrlands Nation'";
				$hamtanorrland = mysqli_query($conn, $valjnorrland);
				$kontrollnorrland = mysqli_num_rows($hamtanorrland);
				if ($kontrollnorrland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtanorrland))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['norrland']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Norrlands just nu";
					unset($_SESSION['norrland']);
				}	
			}
			
			else if (isset($_SESSION['smaland']))
			{
				$valjsmaland = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Smålands Nation'";
				$hamtasmaland = mysqli_query($conn, $valjsmaland);
				$kontrollsmaland = mysqli_num_rows($hamtasmaland);
				if ($kontrollsmaland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtasmaland))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['smaland']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Smålands just nu";
					unset($_SESSION['smaland']);
				}
			}
			
			else if (isset($_SESSION['stocken']))
			{
				$valjstocken = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Stockholms Nation'";
				$hamtastocken = mysqli_query($conn, $valjstocken);
				$kontrollstocken = mysqli_num_rows($hamtastocken);
				if ($kontrollstocken > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtastocken))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['stocken']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Stockholms just nu";
					unset($_SESSION['stocken']);
				}
			}	
				
			else if (isset($_SESSION['snerike']))
			{
				$valjsnerike = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Södermanlands-Nerikes Nation'";
				$hamtasnerike = mysqli_query($conn, $valjsnerike);
				$kontrollsnerike = mysqli_num_rows($hamtasnerike);
				if ($kontrollsnerike > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtasnerike))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['snerike']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Sodermanlands-Nerikes just nu";
					unset($_SESSION['snerike']);
				}	
			}
			
			else if (isset($_SESSION['upland']))
			{
				$valjupland = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Uplands Nation'";
				$hamtaupland = mysqli_query($conn, $valjupland);
				$kontrollupland = mysqli_num_rows($hamtaupland);
				if ($kontrollupland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaupland))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['upland']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Uplands just nu";	
					unset($_SESSION['upland']);
				}	
			}
			
			else if (isset($_SESSION['varmland']))
			{
				$valjvarmland = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Värmlands Nation'";
				$hamtavarmland = mysqli_query($conn, $valjvarmland);
				$kontrollvarmland = mysqli_num_rows($hamtavarmland);
				if ($kontrollvarmland > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtavarmland))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['varmland']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Värmlands just nu";
					unset($_SESSION['varmland']);
				}
			}
			
			else if (isset($_SESSION['vg']))
			{
				$valjvg = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Västgöta Nation'";
				$hamtavg = mysqli_query($conn, $valjvg);
				$kontrollvg = mysqli_num_rows($hamtavg);
				if ($kontrollvg > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtavg))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['vg']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Västgöta just nu";
					unset($_SESSION['vg']);
				}	
			}
			
			else if (isset($_SESSION['vdala']))
			{
				$valjvdala = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'Västmanlands-Dala Nation'";
				$hamtavdala = mysqli_query($conn, $valjvdala);
				$kontrollvdala = mysqli_num_rows($hamtavdala);
				if ($kontrollvdala > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtavdala))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['vdala']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Västmanland-Dala just nu";
					unset($_SESSION['vdala']);
				}
			}
			
			else if (isset($_SESSION['og']))
			{
				$valjog = "SELECT eveID, titel, typ, fran, till, datum, krav, beskrivning, plats, nation FROM evenemang WHERE nation = 'ÖstgÖta Nation'";
				$hamtaog = mysqli_query($conn, $valjog);
				$kontrollog = mysqli_num_rows($hamtaog);
				if ($kontrollog > 0)
				{
					while ($row = mysqli_fetch_assoc($hamtaog))
					{
						include('includeecho-filtrering-process.php');
						unset($_SESSION['og']);
					}
				}
				else
				{
					echo "Det finns inga evenemang på Östgöta just nu";
					unset($_SESSION['og']);
				}
			}
		?>