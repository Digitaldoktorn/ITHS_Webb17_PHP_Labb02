<?php
    // starting session
    session_start();
    // $error=" ";

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    include_once("class.User.php");
    $user1 = new User($userName, $userPassword);

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

    else {?>
        <div>
            <form>
                <fieldset>
                    <legend><strong>USER LOGIN</strong></legend>

                        <?php echo $user1->getForm("session_login.php"); ?>

                           <p id="small-text">Don't have an account? <br>Please <a href="register.php">register here</a></p>
                </fieldset>
                
                <?php
                // checking for error, print error message
                if($error) {
                    echo "<p id='alert'>";
                    echo $error;
                    echo "</p>";
                }

            ?>
         

            </form>
        </div>
        <?php
    }




?>

            
               
                   
            
            

