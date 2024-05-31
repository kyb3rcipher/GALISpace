<?php
function connectToDatabase() {
    $db_host = "sql200.infinityfree.com";
    $db_username = "if0_36647081";
    $db_password = "nmT0QyUZksK";

    if (isset($db_host, $db_username, $db_password)) {
        $connection = new mysqli($db_host, $db_username, $db_password, "database");
    } else {
        $connection = new mysqli("localhost", "root", "", "database");
    }

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}
?>