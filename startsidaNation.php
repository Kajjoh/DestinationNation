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

            </div>
        </div>

        <?php
            include('html/sidfot.html');
        ?>

    </body>
</html>