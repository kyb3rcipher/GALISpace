<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../sql/database.php';
    $conn = connectToDatabase();

    $username = $_POST["username"];

    $sql = "DELETE FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "ERROR: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>