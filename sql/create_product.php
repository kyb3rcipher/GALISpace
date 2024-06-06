<?php
require_once '../sql/database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $type = $_POST['type'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        if(getimagesize($_FILES['image']['tmp_name']) === false) { return; }
        $uploadDir = '../images/products/' . strtolower($type) . '/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);
    }

    $sql = "INSERT INTO products (name, description, price, type, media) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssdss", $name, $description, $price, $type, $uploadFile);
    
    if(mysqli_stmt_execute($stmt)) {
        header("Location: /admin/products.php");
    } else {
        echo "ERROR: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

$conn->close();
?>