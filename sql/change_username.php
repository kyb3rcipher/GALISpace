<?php
require_once 'database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["newUsername"];
    $oldUsername = $_POST["oldUsername"];

    if ($newUsername && $oldUsername) {
        $sql = "UPDATE users SET username = ? WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $newUsername, $oldUsername);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}

$conn->close();
?>