<?php
    // starting session
    session_start();
    // $error=" ";

    // checking if submit button is clicked
    if(isset($_POST["submit"])){
        

        $userName = "Burt";
        $password = "xyz987";

        if($_POST["userName"] != $userName || $_POST["pw"] != $password){
            $error = "Your username and/or password was not entered correctly. Please try again.";
        }

        // checking if there are errors
        if(!$error){

            // sending user to logged in page
            header("Location: profile_page.php");
        }
    }




?>