<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "Cssoft@123#";
    $dbname = "php_practice_crud";

    // Create Connection
    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if(!$connection){
        die("Connection Failed:" . mysqli_connect_error());
    }
    // echo "Connected Successfully!";
    // mysqli_close($connection);
?>