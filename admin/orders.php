<?php
$pageTitle = "Admin Orders Manager";
$pageStyles = "/css/admin.css";
include "../includes/layout_start.php";
?>


<main>
<h1 class="grandient-highlight-text">Orders Manager</h1>

    <?php
    require_once '../sql/database.php';
    $conn = connectToDatabase();
    
    $result = $conn->query("SELECT * FROM orders");
    if ($result->num_rows > 0) {
        
        echo '
        <table>
            <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Products</th>
            <th>Date</th>
            <th>Action</th>
            </tr>
        ';

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["username"]) . '</td>';
            
            $products = json_decode($row["products"], true);
            if (is_array($products)) {
                echo '<td>';
                foreach ($products as $product) {
                    $productName = $product['name'];
                    $productQuantity = $product['quantity'];
                    
                    $productResult = $conn->query("SELECT * FROM products WHERE name = '" . $conn->real_escape_string($productName) . "'");
                    if ($productResult->num_rows > 0) {
                        while ($productRow = $productResult->fetch_assoc()) {
                            echo '<div class="product-item">';
                                echo '<img src="' . htmlspecialchars($productRow['media']) . '">';
                                echo '<p>' . htmlspecialchars($productRow['name']) . '</p>';
                                echo '<p>Quantity: ' . htmlspecialchars($productQuantity) . '</p>';
                            echo '</div>';
                        }
                    }
                }
                echo '</td>';

                echo '<td>' . htmlspecialchars($row["created"]) . '</td>';

                echo '<td><button class="red-button delete-button" data-id="' . htmlspecialchars($row["id"]) . '">Delete</button></td>';
                echo "</tr>";
            }
        }

        echo '</table>';
    } else {
        echo '<p>No orders available</p>';
    }
    
    $conn->close();
    ?>

</main>



<?php
$pageScripts = '/js/orders-manager.js';
include "../includes/layout_end.php";
?>