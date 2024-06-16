<?php
require_once '../sql/database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newEmail = $_POST["newEmail"];
    $oldEmail = $_POST["oldEmail"];

    if ($newEmail && $oldEmail) {
        $sql = "UPDATE users SET email = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ss", $newEmail, $oldEmail);

            if ($stmt->execute()) {
                echo "success";

                if (isset($_GET["from_account"])) {
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                }
            } else {
                echo "error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "error: " . $conn->error;
        }
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}

$conn->close();
?>