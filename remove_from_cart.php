<?php
session_start();

// Read JSON request body
$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);

if (isset($data['name'])) {
    $productName = $data['name'];
    
    foreach ($_SESSION['cart'] as $product_id => $product) {
        if ($product['name'] === $productName) {
            unset($_SESSION['cart'][$product_id]); // Remove product
            
            $totalItems = count($_SESSION['cart']);
            $totalPrice = array_reduce($_SESSION['cart'], function ($sum, $item) {
                return $sum + $item['price'];
            }, 0);
            
            // Returns the new information on total items and price
            echo json_encode(['success' => true, 'newTotalItems' => $totalItems, 'newTotalPrice' => $totalPrice]);
            exit;
        }
    }
}

// In case of failure
echo json_encode(['success' => false]);
?>