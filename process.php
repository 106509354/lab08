<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'Ryan' && $password == '106509354') {
        $_SESSION['user'] = $username
        header('Location: welcome.php');
    } else {
        echo "invalid login. <a href='login.html'>Try again</a>";
    }
?>