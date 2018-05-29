<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
		header("Location: index.php");
	}
?>

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
		</div>

		<div id="sparadeEvMSS">
			<h4>Sparade evenemang:</h4>
			<?php
				include('process/mSSSparade-process.php');
			?>
		</div>

		<div id="mssFooter">
		<?php
			include('html/sidfot.html');
		?>
		</div>
		
	    <script src="javaMeny.js"></script>		
	</body>
</html>
	