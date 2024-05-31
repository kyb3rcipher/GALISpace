<?php
require_once 'database.php';
$connection = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        header("Location: /login.php?alert=register_success");
    } else {
        header("Location: /register.php?alert=register_fail");
    }
    exit;
}

$connection->close();
?>