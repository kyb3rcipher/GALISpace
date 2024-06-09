<?php
require_once 'database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST["username-or-email"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];
        
        if (password_verify($password, $storedPassword)) {
            setcookie("username", $row["username"], time() + (3600), "/");

            header("Location: /index.php?alert=login_success");
        } else {
            header("Location: /login.php?alert=login_failed");
        }
    } else {
        header("Location: /login.php?alert=login_failed");
    }
    
    exit;
}

$conn->close();
?>