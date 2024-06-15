<?php
session_start();

// Check if the product is already in the cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$_SESSION['cart'][$_POST['product_id']] = array(
    'type' => $_POST['product_type'],
    'name' => $_POST['product_name'],
    'price' =>$_POST['product_price'],
    'quantity' => $_POST['product_quantity'],
    'media' => $_POST['product_media']
);

header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>
