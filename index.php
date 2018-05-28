<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="html/main.css" rel="stylesheet">
		<meta charset="UTF-8">
    </head>
	
	<body>

    <?php
        include('html/sidhuvud.html');
    ?>

        <div id="loginAdm">
            <p class="loggain"><a href="loginAdm.php" >Administratör</a></p>
        </div>

        <h2> Välkommen till DestinationNation!</h2>
        
        <p class="student-nation" id="nationsKnapp"><a href="loginNat.php" >Logga in som Nation!</a></p>

        <p class="student-nation" id="studentKnapp"><a href="loginStud.php" >Logga in som Student!</a></p>


    <?php
        include('html/sidfot.html');
    ?>
    	    	  
	</body>
</html>	
      

