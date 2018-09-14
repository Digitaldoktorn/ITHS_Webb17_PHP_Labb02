<?php
    session_start();
    include_once('class.User.php');
    $csvUserName = $_SESSION['userName'];

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

            <h1>Welcome <?php echo $csvUserName; ?>! </h1>
                <p>
                    You are now logged in to your profile page!<br> <br>

                <br><br>
                </p>
                <p><a href="profile_page_loggedout.php">LOG OUT</a></p>
            </form>
        </section>
    </div>
    
</body>
</html>