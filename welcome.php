<?php
    session_start()
    if(isset($_SESSION['user'])){
        echo "Welcome, ". $SESSION['user'] . " You have successfully logged in.";
    } else {
        header{'Location: login.html'}
    }
?>