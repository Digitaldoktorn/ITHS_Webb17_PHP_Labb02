
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title>Create account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <h3>CREATE YOUR ACCOUNT</h3>
        <form id="register" action="session_register.php" method="POST">
                    
                    <label for="username">Username</label>
                    <input class="text-input" name="userName" type="text"><br>
                    <label for="password">Password</label>
                    <input class="text-input" name="userPassword" type="password"><br>
                    <input class="btn" type="submit" name="submit" value="CREATE ACCOUNT">
            
            
        </form>
        <p id="small-text">Already have an account? Please <a href="index.php">login</a></p>
    </div>
</body>
</html>
