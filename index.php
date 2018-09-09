<?php
    // session_start();
    // if(isset($_SESSION["psw"])){
    //     echo "funkar";
    // }
    // unset($_SESSION["psw"]);

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

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
    <div>
        <form action="index.php" method="POST">
            <fieldset>
                <legend><strong>USER LOGIN</strong></legend>
                    <label for="username">User name</label>
                    <input class="text-input" name="userName" type="text">
                    <label for="password">Password</label>
                    <input class="text-input" name="pw" type="password">
            </fieldset>
            <input class="btn" type="submit" name="submit" value="LOGIN">

            <?php
                // checking for error messages
                if(count($errors) > 0) {
                    echo '
                            <p id="alert">'.implode('</p><p>', $errors).'</p>
                        ';
                }

            ?>
            <p id="small-text">Don't have an account? Please <a href="register.php">register here</a></p>
        </form>
    </div>
    
</body>
</html>