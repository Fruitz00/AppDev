<?php
    $my_server = "localhost";
    $my_username = "root";
    $my_password = "";

    $conn = mysqli_connect($my_server,$my_username, $my_password);

    if(!$conn){
        die("Connection Failed:". $conn->connect_error);
    }
?>