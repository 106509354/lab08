<!DOCTYPE html>
<html lang="en">
<?php
    session_start(); ?>
    <head>
    <title> Welcome page </title>
    <head>
        <body>
            <?php
                include 'header.inc';
                if(isset($_SESSION['user'])){
                    echo "Welcome, ". $_SESSION['user'] . "! You have successfully logged in.";
                } else {
                    header('Location: login.html');
                exit();
                }

                include 'footer.inc';

            ?>
</html>