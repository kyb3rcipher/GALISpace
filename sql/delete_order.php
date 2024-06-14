<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../sql/database.php';
    $conn = connectToDatabase();

    $orderID = $_POST["orderID"];

    $sql = "DELETE FROM orders WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $orderID);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "ERROR: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>