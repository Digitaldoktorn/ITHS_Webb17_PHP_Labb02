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
    $user2 = new User("Lisa", "xyz987654");

    // check if any value is submitted
    if(isset($_POST["submit"])){

        if(empty($_POST["userName"]) || empty("pw")) {
            
            
            echo "<p id='alert'>Please fill in the forms.</p>";
            // sleep(4);
            echo "<script type='text/javascript'>
                document.location.href = 'register.php'; </script>";
            
        }
        
        else {
            // Print data - ändra senare (skriv till fil)
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";

            // Remove "submit" from array -funkar ej
            array_pop($_POST);

            // store username (se "mini-library-master")
            $user2->setter($_POST);
            echo $user2->getter();
            $user2->saveUserName();

            $userName = $_POST["userName"];
            $_SESSION["userName"] = $_POST["userName"];
            $password = $_POST["pw"];
            $_SESSION["pw"] = $_POST["pw"];

        }

    }

?>