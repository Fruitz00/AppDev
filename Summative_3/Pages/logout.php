<?php
    session_start();
    session_destroy();

    if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];

        setcookie('username', $username, time()-1);
        setcookie('password', $password, time()-1);
    }

    header("location: Log_In_A2.php")
    header("location: Log_In_A.php")
?>