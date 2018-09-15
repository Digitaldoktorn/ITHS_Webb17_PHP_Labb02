<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title>Profile page - logged out</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <section>
            <p>
                <br><br><br><br> 
                You've been logged out successfully!
                <br><br><br><br><br>        
            </p>
        </section>
    </div>
</body>
<script>
    // sends user to "session_logout"
    setTimeout(function(){
        window.location = "session_logout.php";
        }, 2000);
</script>
</html>

