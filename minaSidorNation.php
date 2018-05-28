<?php
    session_start();          
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
			include('html/menyNation.html');
		?>

		<div id="sessionMessageNation">
			<?php
				if (isset($_SESSION['nation']))
				{
					echo $_SESSION['nation'] ."s evenemang!";
				}
			?>
		</div>
		

		<a href="skapaEv.php" id="evenemangsKnapp">Skapa evenemang!</a>
		

		<div id="minasidorNflode">	
			<div id="eventNation">
			<?php
				include('process/mSN-process.php');
			?>
			</div>
		</div>
			
		</div>

		<div class="sidfotPlats">
			<?php
				include('html/sidfot.html');
			?>
		</div>

	</body>
</html>