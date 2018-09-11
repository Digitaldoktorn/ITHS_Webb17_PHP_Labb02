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
    // starting session, available for garbage collection in 60s
    session_start(["gc_maxlifetime" => 60]);

    // garbage collection on every pageload
    ini_set("session.gc_probability", 100);

    include_once('class.User.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // check if any value is submitted
    if(isset($_POST["submit"])){

        if(empty($_POST["userName"]) || empty($_POST["pw"])) {
            
            $error2 = "Please fill in the forms.";
            // echo "<p id='alert'>Please fill in the forms.</p>";
            // // sleep(2);
            echo "<script type='text/javascript'>
                document.location.href = 'register.php'; </script>";
            
            
        }
        // if(!empty($_POST["userName"]) || empty("pw")) {

        //     // sending user to log in page
        //     header("Location: index.php");
        // }
        
        if(!empty($_POST["userName"]) || empty("pw")) {
            // Print data - ändra senare (skriv till fil)
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";

            // Remove "submit" from array - FUNKAR EJ!
            array_pop($_POST);

            // saving data in session
            $userName = $_POST["userName"];
            $_SESSION["userName"] = $_POST["userName"];
            $password = $_POST["pw"];
            $_SESSION["pw"] = $_POST["pw"];


        }
        


    }

?>