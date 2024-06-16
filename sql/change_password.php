<?php
require_once 'database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_COOKIE['username'];
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    if ($new_password !== $confirm_password) {
        echo "New passwords do not match.";
        exit;
    }
    
    $result = $conn->query("SELECT password FROM users WHERE username='$username'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_hashed_password = $row['password'];

        if (password_verify($current_password, $current_hashed_password)) {
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
            $stmt->bind_param("ss", password_hash($new_password, PASSWORD_DEFAULT), $username);

            if ($stmt->execute()) {
                echo "success";

                if (isset($_GET["from_account"])) {
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                }
            } else {
                echo "error";
            }
        } else {
            echo "Current password is incorrect.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>