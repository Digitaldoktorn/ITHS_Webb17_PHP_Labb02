<?php

    // i denna fil (Tror det ska vara i session_login istället:) 
    // instansiera objekt av user, get form-funktion
    // instansiera objekt av user, get inloggningsfunktion

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    require_once "session_login.php";
?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title>PHP - Labb 2 - Anders Eriksson</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Flyttat denna kod till klassen 
    <div>
        <form action="index.php" method="POST">
            <fieldset>
                <legend><strong>USER LOGIN</strong></legend>
                    <label for="username">User name</label>
                    <input class="text-input" name="userName" type="text">
                    <label for="password">Password</label>
                    <input class="text-input" name="userPassword" type="password">
            </fieldset>
            <input class="btn" type="submit" name="submit" value="LOGIN">

            <?php


            /*
                // checking for error, print error message
                if($error) {
                    echo "<p id='alert'>";
                    echo $error;
                    echo "</p>";
                }
            */
            ?>
            <p id="small-text">Don't have an account? Please <a href="register.php">register here</a></p>
        </form>
    </div>
    -->

</body>
</html>