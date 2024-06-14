<?php
session_start();
require_once 'database.php';
$conn = connectToDatabase();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selected_products = json_decode($_POST['selected_products'], true);

    if (!empty($selected_products)) {
        // Ensure user is logged in
        if (isset($_COOKIE['username'])) {
            $username = $_COOKIE['username'];

            // Prepare the selected products list as a JSON string
            $products_json = json_encode($selected_products);

            $stmt = $conn->prepare("INSERT INTO orders (username, products, created) VALUES (?, ?, NOW())");
            $stmt->bind_param('ss', $username, $products_json);
            if ($stmt->execute()) {
                foreach ($selected_products as $product) {
                    unset($_SESSION['cart'][$product['id']]);
                }
                
                header('Location: /order.php?order_id=' . $stmt->insert_id . '&order_from_cart=true');
                exit();
            } else {
                echo "Error processing order: " . $stmt->error;
            }
        } else {
            echo "User not authenticated.";
        }
    } else {
        echo "No products selected.";
    }
}

$conn->close();
?>