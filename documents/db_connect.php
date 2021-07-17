<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "abhilash";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn)
    {
        die ("Connection is terminated throught this error -->" . $mysqli_connect_error());
    }
?>