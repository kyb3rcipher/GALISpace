<?php
require_once '../sql/database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $result = $conn->query("SELECT image FROM products WHERE id='" . $id . "'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image = "../images/" . $row['type'] . $row['image'];
        
        if (file_exists($image)) {
            unlink($image);
        }
    }
    
    $sql = "DELETE FROM products WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "ERROR: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
