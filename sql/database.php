<?php
function connectToDatabase() {
    $connection = new mysqli("localhost", "root", "", "galispace");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}
?>