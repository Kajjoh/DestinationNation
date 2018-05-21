<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "projekt";

    // Create connection to database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection with database
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Get values from login.php
    $inputmail = $_POST['personnummer'];
    $inputpassword = $_POST['pword'];

    $sql = "SELECT namn, mail, losen, salt FROM registrering WHERE mail='$inputmail'";

    $result = mysqli_query($conn, $sql);

    $row=mysqli_fetch_assoc($result);
                
        $namnFromDB = $row['namn'];
        $mejlFromDB = $row['mail'];
        $pwFromDB = $row['losen'];
        $saltFromDB = $row['salt'];
                
        $hash = sha1($saltFromDB . $inputpassword);

    if ($pwFromDB==$hash)
    {
        header("Location: minaSidorStudent.php");
    }
    else
    {
        header("Location: inloggning.php");
    }
             
    session_start();
    $_SESSION['user'] = "$namnFromDB";

    $conn->close();

?>