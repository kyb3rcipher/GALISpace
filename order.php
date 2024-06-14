<?php
$pageTitle = "Order confirmation";
$pageStyles = 'css/order-confirmation.css';
include "includes/layout_start.php"; 
?>



<main>
    <?php
    if ($_GET['order_from_cart']) {
        echo '<h1>Thank you for your order!</h1>';
        echo '<p>Your order has been placed successfully. You will receive an email confirmation shortly.</p>';
    }

    if (isset($_GET['order_id'])) {
        require_once 'sql/database.php';
        $conn = connectToDatabase();

        $orderID = $_GET['order_id'];
        $orderTotal = 0;
        
        $stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
        $stmt->bind_param('i', $orderID);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $order = $result->fetch_assoc();
            
            // Decode JSON from order
            $selected_products = json_decode($order['products'], true);
            
            echo '<h1>Order Summary</h1>';
            echo '<h3>Order ID: #' . $orderID . '</h3>';

            echo '<h3>Products:</h3>';
            echo '<div class="products-slider">';
                echo '<i id="left" class="fa-solid fa-angle-left"></i>';
                echo '<ul class="carousel">';
                foreach ($selected_products as $product) {
                    $productDBRow = $conn->query("SELECT * FROM products WHERE id = '" . $product['id'] . "'")->fetch_assoc();
                    
                        echo '<li class="card">';
                            echo '<img src="' . $productDBRow['media'] . '" alt="img" draggable="false">';
                            echo '<h2>' . $productDBRow['name'] . '</h2>';
                            echo '<span>' . $product['quantity'] . 'x - $' . $productDBRow['price']. '</span>';
                            $orderTotal += $productDBRow['price'];
                        echo '</li>';
                }
                echo '</ul>';
                echo '<i id="right" class="fa-solid fa-angle-right"></i>';
            echo '</div>';
            
            
            echo '<p>Total: <strong>USD $' . $orderTotal . '</strong></p>';
        } else {
            echo '<p>No order found with ID: ' . $orderID . '</p>';
        }

        $stmt->close();
        $conn->close();
    } else {
        echo '<p>No order ID provided.</p>';
    }
    ?>
    
    <a href="/">Continue Shopping <i class="fa-solid fa-arrow-right"></i></a>
</main>



<?php
$pageScripts = '/js/product.js';
include "includes/layout_end.php";
?>
