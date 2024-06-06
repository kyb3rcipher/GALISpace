<?php
require_once '../sql/database.php';
$conn = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $newImageUploaded = false;
    $uploadFile = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        if (getimagesize($_FILES['image']['tmp_name']) === false) { return; }

        // Get the path of old image
        $result = $conn->query("SELECT media FROM products WHERE id='$id'");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $oldImage = $row['media']

            $uploadDir = '../images/products/' . $row['type'];
            $uploadFile = $uploadDir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);
            $newImageUploaded = true;

            // Delete the image if it exists and if it is different from the old image
            if (!empty($oldImage) && $oldImage !== $uploadFile && file_exists($oldImage)) {
                unlink($oldImage);
            }
        }
    }
    
    

    $sql = "UPDATE products SET type='$type', name='$name', description='$description', price='$price'";
    $sql .= $newImageUploaded ? ", image='$uploadFile'" : '';
    $sql .= " WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>