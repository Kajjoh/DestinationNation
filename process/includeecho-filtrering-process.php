<?php

include('process/connection.php');
		
		$id = $row['eveID'];
		$titel = $row['titel'];
		$typ = $row['typ'];
		$nation = $row['nation'];
		$fran = $row['fran'];
		$till = $row['till'];
		$datum = $row['datum'];
		$plats = $row['plats'];
		$krav = $row['krav'];
		$beskrivning = $row['beskrivning'];
		
	
	
		
		echo " <div class=evenemang><form id=sparaevenemang name=sparaevenemang method=POST action=sparaEvenemang.php> <br> 
		<div class=titelEv>".$titel  ." </div>
		<br> ".$typ ."
		<br> Evenemangs ID: ".$id ."
		<br> Nation: ".$nation ." 
		<br> Tid: ".$fran ." - ".$till ."
		<br> Datum: ".$datum ."
		<br> Plats: ".$plats ."
		<br> Krävs anmälan? ".$krav ."
        <br> ".$beskrivning ." <br> 
		<input type=submit value=Spara id=sparaev>
		</form>
		</div>";
		
		
		
                    
?>