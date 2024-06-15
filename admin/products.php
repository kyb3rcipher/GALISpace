<?php
$pageTitle = "Admin Accounts Manager";
$pageStyles = "/css/admin.css";
include "../includes/layout_start.php";
?>

<main>
<h1 class="grandient-highlight-text">Products Manager</h1>

<?php if(isset($_COOKIE['username']) && $_COOKIE['username'] === 'admin'): ?>
<div>
<span>Filter:</span>
<select name="filter" onchange="filterProducts(this.value)">
    <option value="All">All</option>
    <option value="Telescopes">Telescopes</option>
    <option value="Toys">Toys</option>
    <option value="Glasses">Glasses</option>
    <option value="Picture">Picture</option>
    <option value="Audios">Audios</option>
    <option value="Miscellaneous">Miscellaneous</option>
</select>
</div>

<table>
    <tr>        
        <th>ID</th>
        <th>Type</th>
        <th>Name</th>
        <th>Model</th>
        <th>Description</th>
        <th>Price</th>
        <th>Media</th>
        <th>Actions</th>
    </tr>

    <?php
    require_once '../sql/database.php';
    $conn = connectToDatabase();

    $sql = "SELECT id, name, model, description, price, media, type FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr class='product-row {$row['type']}'>";
                echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
                echo '<form action="../sql/update_product.php" method="POST" enctype="multipart/form-data">';
                echo '<input type="hidden" name="id" value="' . htmlspecialchars($row["id"]) . '">';
                
                echo '<td><select name="type">';
                foreach (["Telescopes", "Toys", "Glasses", "Picture", "Audios", "Miscellaneous"] as $type) {
                    $selected = ($row["type"] == $type) ? 'selected' : '';
                    echo "<option value=\"$type\" $selected>$type</option>";
                }
                echo '</select></td>';
                
                echo '<td><input type="text" name="name" value="' . htmlspecialchars($row["name"]) . '"></td>';

                echo '<td><input type="text" name="model" value="' . htmlspecialchars($row["model"]) . '"></td>';
                
                echo '<td><textarea name="description">' . htmlspecialchars($row["description"]) . '</textarea></td>';
                
                echo '<td><input type="number" name="price" value="' . htmlspecialchars($row["price"]) . '"></td>';
                
                echo '<td><label for="image-' . htmlspecialchars($row["id"]) . '" id="label-for-image"><img id="img-' . htmlspecialchars($row["id"]) . '" src="../' . htmlspecialchars($row["media"]) . '" alt="' . htmlspecialchars($row["name"]) . '" width="50"></label>';
                echo '<input type="file" name="image" id="image-' . htmlspecialchars($row["id"]) . '" accept="image/*" onchange="previewImage(event, ' . htmlspecialchars($row["id"]) . ')">';

                echo '<td><input type="submit" class="green-button" id="update-button" value="Update"></input></form> <button class="red-button" data-id="' . htmlspecialchars($row["id"]) . '" onclick="deleteProduct(this)">Delete</button><input type="hidden" name="id" value="1"></td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No products found</td></tr>";
    }
    $conn->close();
    ?>
</table>

<form id="create-product" action="../sql/create_product.php" method="POST" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="name">Model:</label>
    <input type="text" name="model" required>

    <label for="description">Description:</label>
    <input type="text" name="description" required>

    <label for="price">Price:</label>
    <input type="text" name="price" required>

    <label for="type">Type:</label>
    <select name="type">
        <option>Telescopes</option>
        <option>Toys</option>
        <option>Glasses</option>
        <option>Picture</option>
        <option>Audios</option>
        <option>Miscellaneous</option>
    </select>

    <label class="custom-file-upload" onchange="imageImage">
        <input type="file" name="image" accept="image/*" required>
        <span class="file-name" id="file-name"><i class="fa fa-cloud-upload"></i> Custom Upload</span>
    </label>

    <input type="submit" class="button">
</form>

<?php else: ?>
    <h2>You don't have permissions for this</h2>
<?php endif; ?>
</main>


<?php
$pageScripts = '/js/products-manager.js';
include "../includes/layout_end.php";
?>