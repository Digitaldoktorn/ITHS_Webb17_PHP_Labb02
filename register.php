<?php
    // I denna fil:
    // instansiera user - get registerfunktion
    // spara värden från användarens input - se sessionsövningarna
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title>Create account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="session_register.php" method="POST">
            <fieldset>
                <legend><strong>CREATE YOUR ACCOUNT</strong></legend>
                    <label for="username">User name</label>
                    <input class="text-input" name="userName" type="text">
                    <label for="password">Password</label>
                    <input class="text-input" name="pw" type="password">
            </fieldset>
            <input class="btn" type="submit" name="submit" value="CREATE ACCOUNT">

                <?php
                // checking for error, print error message - FUNKAR EJ!
                if($error2) {
                    echo "<p id='alert'>";
                    echo $error2;
                    echo "</p>";
                }

            ?>

            <p id="small-text">Already have an account? Please <a href="index.php">login</a></p>
        </form>
    </div>
    
</body>
</html>
