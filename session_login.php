<?php
    // starting session
    session_start();

    // checking if submit button is clicked
    if(isset($_POST["submit"])){
        $errors = array();

        $userName = "Burt";
        $password = "xyz987";

        if($_POST["userName"] != $userName || $_POST["pw"] != $password){
            $errors[] = "Your username and/or password was not entered correctly. Please try again.";
        }

        // checking if there are errors
        if(count($errors) == 0){

            // create session variable with id 1
            $_SESSION["userId"] = 1;

            // sendsing user to logged in page
            header("Location: profile_page.php");
        }
    }




?>