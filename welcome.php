<?php
    session_start();
    include 'header.inc';
    if(isset($_SESSION['user'])){
        echo "Welcome, ". $_SESSION['user'] . "! You have successfully logged in.";
    } else {
        header('Location: login.html');
        exit();
    }
    include 'footer.inc';

?>