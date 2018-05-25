<?php

session_start();

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


    $inputmail = $_POST['email'];
    $inputpassword = $_POST['pw'];
    
    $sql = "SELECT namn, mejl, losen FROM admin WHERE mejl='$inputmail'";

    $result = mysqli_query($conn, $sql);

    if (($inputmail=="") || ($inputpassword==""))
        {
            header('Location: ../loginAdm.php');
        }
    else if (mysqli_num_rows($result)<1) 
    {
        $_SESSION['noUser'] = "Användaren finns inte registrerad.";
        header("Location: ../loginAdm.php");
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
            $namnFromDB = $row['nation'];
            $pwFromDB = $row['losen'];

            if ($inputpassword==$pwFromDB)
            {
                header("Location: ../startsidaTjanstelev.php");
            }
            else
            {
                $_SESSION['password'] = "Fel lösenord.";
                header("Location: ../loginAdm.php");
            }

        }

        $_SESSION['admin'] = "$namnFromDB";

    $conn->close();
    
?>




	