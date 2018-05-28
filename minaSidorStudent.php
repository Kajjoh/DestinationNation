<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>DestinationNation</title>
		<link href="html/main.css" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	
	<body>
	
		<?php
			include('html/sidhuvud.html');
			include('html/menyStudent.html');
		?>
						
		<div id="persuppgMSS">
			<h4>Personuppgifter</h4>

			<?php
				include('process/mSSPerson-process.php');
			?>

		</div>

		<div id="anmaldaEvMSS">
			<h4>Anmälda evenemang:</h4>
			<?php
				include('process/mSSAnmalan-process.php');
			?>
			<br>
			<br>
		</div>

		<div id="sparadeEvMSS">
			<h4>Sparade evenemang:</h4>
			<br>
			<?php
				include('process/mSSSparade-process.php');
			?>
			<br>
		</div>

		<?php
			include('html/sidfot.html');
		?>
		
	    <script src="javaMeny.js"></script>		
	</body>
</html>
	