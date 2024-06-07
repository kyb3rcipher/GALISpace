<?php
require_once '../sql/database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];

    $sql = "DELETE FROM messages WHERE message='$message'";
    if ($conn->query($sql)) {
        echo "success";
    } else {
        echo "ERROR: " . $conn->error;
    }
}

$conn->close();
?>