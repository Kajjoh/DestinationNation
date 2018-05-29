<?php

session_start();

    include('connection.php');


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
				$_SESSION['admin'] = "$namnFromDB";
                header("Location: ../startsidaTjanstelev.php");
            }
            else
            {
                $_SESSION['password'] = "Fel lösenord.";
                header("Location: ../loginAdm.php");
            }

        }

        

    $conn->close();
    
?>




	