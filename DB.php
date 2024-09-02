<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rhu q-nnect";
    $port = "3306"; // Replace with the actual port number you've configured

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>