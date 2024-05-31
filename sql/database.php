<?php
function connectToDatabase() {
    $host = "sql200.infinityfree.com";
    $username = "if0_36647081";
    $password = "nmT0QyUZksK";
    $database = "if0_36647081_database";

    if (isset($host, $username, $password)) {
        $connection = new mysqli($host, $username, $password, $database);
    } else {
        $connection = new mysqli("localhost", "root", "", "database");
    }

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}
?>