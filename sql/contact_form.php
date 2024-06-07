<?php
require_once 'database.php';
$connection = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $messageType = $_POST["message-type"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO messages (type, name, email, message) VALUES ('$messageType', '$name', '$email', '$message')";

    if ($connection->query($sql) === TRUE) {
        header("Location: /contact-us.php?alert=success");
    } else {
        header("Location: /contact-us.php?alert=fail");
    }

    exit;
}

$connection->close();
?>