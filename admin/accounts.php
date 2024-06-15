<?php
$pageTitle = "Admin Accounts Manager";
$pageStyles = "/css/admin.css";
include "../includes/layout_start.php";
?>


<main>
<h1 class="grandient-highlight-text">Accounts Manager</h1>

<?php if(isset($_COOKIE['username']) && $_COOKIE['username'] === 'admin'): ?>
<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    <?php
    require_once '../sql/database.php';
    $conn = connectToDatabase();
    
    $result = $conn->query("SELECT username, email, password FROM users");
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if (htmlspecialchars($row["username"]) !== "admin") {
            echo '<td><input type="text" value="' . htmlspecialchars($row["username"]) . '" data-old-username="' . htmlspecialchars($row["username"]) . '"></td>';
        } else {
            echo '<td>admin</td>';
        }
        echo '<td><input type="email" value="' . htmlspecialchars($row["email"]) . '" data-old-email="' . htmlspecialchars($row["email"]) . '"></td>';
        echo '<td><input type="password" placeholder="*****************"></td>';
        if (htmlspecialchars($row["username"]) !== "admin") {
            echo '<td><button class="red-button delete-button" data-username="' . htmlspecialchars($row["username"]) . '">Delete</button></td>';
        }
        echo "</tr>";
    }
    
    $conn->close();
    ?>
</table>
<?php else: ?>
    <h2>You don't have permissions for this</h2>
<?php endif; ?>
</main>


<?php
$pageScripts = '/js/accounts-manager.js';
include "../includes/layout_end.php";
?>
