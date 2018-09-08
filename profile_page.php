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
                    <table align="center">
                        <tr>
                            <th>User name</th>
                            <th>Email address</th>
                            <th>Password</th>
                        </tr>
                        <tr>
                            <td><?php echo $user1->getUserName(); ?></td>
                            <td><?php echo $user1->getEmailAddress(); ?></td>
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

<table>

<tr>
 <th scope="col">dog</th>
 <th scope="col">cat</th>
 <th scope="col">horse</th>

 <th scope="col">iguana</th>
</tr>
<tr>
 <td>5</td>
 <td>2</td>

 <td>10</td>
 <td>500</td>
</tr>
...
</table>