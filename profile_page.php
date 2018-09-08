<?php
    include_once('class.User.php');
    $user1 = new User("Burt", "burt@cnn.com", "abcd1234");
    

?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title>Profile page - logged in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <section>
        
            <h1>Welcome <?php echo $user1->getUserName(); ?>! </h1>
                <p>
                    You are now logged in to your profile page!<br> <br>
                    This is your profile: <br><br>
                    <em>User name: </em><?php echo $user1->getUserName(); ?><br>
                    <em>Email address: </em><?php echo $user1->getEmailAddress(); ?><br>
                    <em>Password: </em><?php echo $user1->getUserPassword(); ?><br><br>
                </p>
                <p id="small-text">Do you want to log out? Click the button below.</small><br><br>
            
            
                <input class="btn" id="logout" type="submit" name="submit" value="LOG OUT">
            </form>
        </section>
    </div>
    
</body>
</html>