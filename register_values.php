<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
<?php

    // displaying errors
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    // including class
    include_once("class.User.php");
    

    // checking if any value is submitted
    if(isset($_POST["submit"])){

        // if forms are empty display error message and reload
        if(empty($_POST["userName"]) || empty($_POST["userPassword"])) {
            
            echo "<div><section><p id='alert'>Please fill in the forms.</p></section></div>";?>
            <script>
                setTimeout(function(){
                    window.location = "register.php";
                    }, 2000);
            </script><?php           
        }

        // If forms are filled in: saving user and redirecting to login page
        if(!empty($_POST["userName"]) || empty("userPassword")) {
            $user = new User();
            $arrayPost = $_POST;
            array_pop($arrayPost); // removes submit value from array
            $user->setter($arrayPost);
            $user->saveUserName();   
            
            echo "<div><section><p id='alert2'>Account created!<br> You can now log in...</p></section></div>";?>
            
            <script>
                setTimeout(function(){
                    window.location = "index.php";
                    }, 2000);
            </script><?php
        }
    }

?>
