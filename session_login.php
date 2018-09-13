<?php
    // starting session
    session_start();
    // $error=" ";

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    include_once("class.User.php");
    $user1 = new User();

    // checking if submit button is clicked - 
    if(isset($_POST["submit"])){

        $user1->loginUser($_POST);
        
    }
    
    else {?>
        <div>
            <?php echo $user1->getForm("session_login.php"); ?>

                <p id="small-text">Don't have an account? <br>Please <a href="register.php">register here</a></p>
                
        </div>
        <?php
    }




?>

            
               
                   
            
            

