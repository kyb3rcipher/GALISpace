<?php
session_start();

$requestPayload = file_get_contents('php://input');
$data = json_decode($requestPayload, true);

$product_id = $data['product_id'];
$new_quantity = $data['quantity'];

if (isset($_SESSION['cart'][$product_id]) && is_numeric($new_quantity) && $new_quantity > 0) {
    $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid product ID or quantity']);
}
?>