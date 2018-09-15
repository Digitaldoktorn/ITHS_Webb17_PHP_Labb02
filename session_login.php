<?php
    // starting session
    session_start();

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    include_once("class.User.php");
    $user = new User();

    // checking if submit button is clicked - then loggin in user
    if(isset($_POST["submit"])){

        $user->loginUser($_POST);
        
    }
    
    // printing form to the page
    else {?>
        <div>
            <h3 id="user-login">USER LOGIN</h3>
            <?php echo $user->getForm("session_login.php"); ?>

                <p id="small-text">Don't have an account? Please <a href="register.php">register here</a></p>
                
        </div>
        <?php
    }




?>

            
               
                   
            
            

