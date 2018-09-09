<?php
    // starting session
    session_start();

    // destroys all user data
    session_destroy();

    // sending user to front page
    header('Location: index.php');
?>