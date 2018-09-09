<?php
    include_once('class.User.php');
    $user1 = new User("Burt", "xyz987");
    

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
                    This is your profile: <br>
                    <table align="center">
                        <tr>
                            <th>User name</th>
                            <th>Password</th>
                        </tr>
                        <tr>
                            <td><?php echo $user1->getUserName(); ?></td>
                            <td><?php echo $user1->getUserPassword(); ?></td>
                        </tr>

                    </table>
                <br><br>
                </p>
                <p id="small-text">Do you want to log out? Click the button below.</small><br><br>
            
            
                <input class="btn" id="logout" type="submit" name="submit" value="LOG OUT">
            </form>
        </section>
    </div>
    
</body>
</html>