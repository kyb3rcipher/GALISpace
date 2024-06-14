<?php
$pageTitle = "Telescopes";
$pageStyles = '/css/products.css';
include "../includes/layout_start.php"; 
?>

<main>
    <h1 class="grandient-highlight-text">Telescopes</h1>
    
    <div class="products">
        <?php
        require_once '../sql/database.php';
        $conn = connectToDatabase();

        $result = mysqli_query($conn, "SELECT * FROM products WHERE type = 'Telescopes'");
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <img src="<?php echo "../" . $row['media'] ?>">
                <h4><?php echo $row['model']; ?></h4>
                <h2><?php echo $row['name']; ?></h2>
                <div class="box">
                    <p>$<?php echo $row['price']; ?></p>

                    <!-- Form for send product information to cart js-session -->
                    <form action="add_product_to_cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="product_type" value="<?php echo $row['type']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="product_media" value="<?php echo $row['media']; ?>">
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
            <?php
        }

        mysqli_close($conn);
        ?>
    </div>
</main>


<?php include "../includes/layout_end.php"; ?>