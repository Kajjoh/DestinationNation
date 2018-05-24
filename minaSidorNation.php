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
			include('html/meny.html');
		?>

		<div id="sessionMessage">
			<?php
				if (isset($_SESSION['nation']))
				{
					echo $_SESSION['nation'] ."!";
				}
			?>
        </div>
		
		<div id="persuppgMSN">
			<h4>"Denna nations (sessions) evenemang"</h4>
			<?php
				include('mSN-process.php');
			?>
		</div>

		<a id="evKnapp" onscroll=""href="SkapaEv.php"><button>Skapa Evenemang</button></a>
		<?php
			include('html/sidfot.html');
		?>
		
	    <script src="javaMeny.js"></script>	
	</body>
</html>