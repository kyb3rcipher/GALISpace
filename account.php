<?php
$pageTitle = "Account";
$pageStyles = 'css/account-manager.css';
include "includes/layout_start.php"; 
?>



<main>
    <h1 class="grandient-highlight-text">Account Manager</h1>

    <?php
    require_once 'sql/database.php';
    $conn = connectToDatabase();

    $username = $_COOKIE['username'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $row = $result->fetch_assoc();
    ?>

    <h3>Username:</h3>
    <form action="sql/change_username.php?from_account=true" method="POST">
        <input type="hidden" name="oldUsername" value="<?php echo $username ?>">
        <input type="text" name="newUsername" value="<?php echo $username; ?>">
        <input type="submit" class="button" value="Change">
    </form>

    <h3>Email:</h3>
    <form action="sql/change_email.php?from_account=true" method="POST">
        <input type="email" value="<?php echo $row['email']; ?>">
        <input type="submit" class="button" value="Change">
    </form>

    <h3>Password:</h3>
    <form action="sql/change_password.php?from_account=true" method="POST">
        <input type="password" name="current_password" placeholder="Current password">
        <input type="password" name="new_password" placeholder="New password">
        <input type="password" name="confirm_password" placeholder="Confirm new password">

        <input type="submit" class="button" value="Update">
    </form>

    <h2>Orders:</h2>
    <?php
    
    
    $orders = $conn->query("SELECT * FROM orders WHERE username='$username'");
    if ($orders->num_rows > 0) {
        echo '
        <table>
            <tr>
            <th>#</th>
            <th></th>
            <th></th>
            </tr>
        ';

            while($row = $orders->fetch_assoc()) {
                echo "<tr>";
                echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
                
                $products = json_decode($row["products"], true);
                if (is_array($products)) {
                    echo '<td><button class="green-button"><a style="color: white;" href="/order.php?order_id=' . $row["id"] . '" target="_blank">Check</a></button></td>';

                    echo '<td><button class="red-button delete-button" data-id="' . htmlspecialchars($row["id"]) . '">Cancel</button></td>';
                }

                echo "</tr>";
            }

        echo '</table>';
    } else {
        echo '<p>No orders available</p>';
    }
    ?>
</main>



<?php
$pageScripts = '/js/orders-manager.js';
include "includes/layout_end.php";
?>