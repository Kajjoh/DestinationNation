<?php

include('process/connection.php');

		echo " <div class=evenemang> <br> <div class=titelEv> ".$row['titel']  ." </div>
		<br> ".$row['typ'] ." 
		<br> Nation: ".$row['nation'] ." 
		<br> Tid: ".$row['fran'] ." - ".$row['till'] ."
		<br> Datum: ".$row['datum'] ."
		<br> Plats: ".$row['plats'] ."
		<br> Krävs anmälan? ".$row['krav'] ."
        <br> ".$row['beskrivning'] ." <br> </div>";
                    
?>