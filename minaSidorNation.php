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
			include('html/menyNation.html');
		?>

		
		<div id="sessionMessage">
				<?php
					if (isset($_SESSION['nation']))
					{
						echo $_SESSION['nation'] ."!";
					}
				?>
			</div>
		<div id="minasidorNflode">
		
			<div id="persuppgMSN">
				<?php
					include('process/mSN-process.php');
				?>
			</div>
			
		</div>

		
		<a id="evKnapp" onscroll=""href="skapaEv.php"><button>Skapa Evenemang</button></a>

		<?php
			include('html/sidfot.html');
		?>

	</body>
</html>