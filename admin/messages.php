<?php
$pageTitle = "Admin Messages Manager";
$pageStyles = "/css/admin.css";
include "../includes/layout_start.php";
?>


<main>
<h1 class="grandient-highlight-text">Messages Manager</h1>

<?php if(isset($_COOKIE['username']) && $_COOKIE['username'] === 'admin'): ?>
<table>
    <tr>
        <th>Type</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>

    <?php
    require_once '../sql/database.php';
    $conn = connectToDatabase();
    
    $result = $conn->query("SELECT type, name, email, message FROM messages");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo '<td><select name="type">';
                    foreach (["Package tracking", "Refound", "Order error", "Website error", "Other"] as $type) {
                        $selected = ($row["type"] == $type) ? 'selected' : '';
                        echo "<option value=\"$type\" $selected>$type</option>";
                    }
            echo '</select></td>';

            echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["email"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["message"]) . '</td>';
            echo '<td><button class="red-button delete-button" data-message="' . htmlspecialchars($row["message"]) . '">Delete</button></td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No messages found</td></tr>";
    }
    
    $conn->close();
    ?>
</table>

<?php else: ?>
    <h2>You don't have permissions for this</h2>
<?php endif; ?>
</main>


<?php
$pageScripts = '/js/messages-manager.js';
include "../includes/layout_end.php";
?>
