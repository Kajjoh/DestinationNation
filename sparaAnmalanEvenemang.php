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
        <link rel="stylesheet" href="html/main.css">
        <meta charset="UTF-8">
    </head>
    
    <body>
	
	<?php
        
		if (isset($_POST['spara']))
		{
			include('sparaEvenemang.php');
		}
		else if (isset($_POST['Anmalan']))
		{
			include('AnmalanEv.php');
		}
    ?>
		
		
		
		
	</body>
</html>	