<?php
$pageTitle = "Pictures";
$pageStyles = '/css/products.css';
include "../includes/layout_start.php"; 
?>


<main>
    <h1 class="grandient-highlight-text">Pictures</h1>
    
    <div class="products">
        <?php
        require_once '../sql/database.php';
        $conn = connectToDatabase();

        $result = mysqli_query($conn, "SELECT * FROM products WHERE type = 'Pictures'");
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <img src="<?php echo $row['media'] ?>">
                <h4><?php echo $row['model']; ?></h4>
                <h2><?php echo $row['name']; ?></h2>
                <div class="box">
                    <p>$<?php echo $row['price']; ?></p>
                    <a href="product-site.php"><button>Buy Now</button></a>
                </div>
            </div>
            <?php
        }

        mysqli_close($conn);
        ?>
    </div>
</main>


<?php include "../includes/layout_end.php"; ?>