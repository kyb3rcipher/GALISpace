<?php
$pageTitle = "Cart";
$pageStyles = 'css/shopping-cart.css';
include "includes/layout_start.php"; 
?>


<main>
    <div id="products">
        <input type="checkbox" onchange="selectAll(this)"> <h2 id="select-all">Select all (7)</h2></i>
        <hr id="select-all-divider">

        <?php
        session_start();

        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $product_id => $product) {
        ?>
                <div class="product">
                    <input type="checkbox" class="product-checkbox" onchange="updateTotal()" data-price="<?php echo $product['price']; ?>" data-product-id="<?php echo $product_id; ?>">
                    <?php if (getimagesize($product["media"])): ?>
                        <img src="<?php echo $product['media']; ?>" alt="<?php echo $product['name']; ?>">
                    <?php else: ?>
                        <audio controls><source src="../<?php echo $product['media'] ?>" type="audio/mpeg"></audio>
                    <?php endif; ?>
                    
                    <div id="text">
                        <p><?php echo $product['type']; ?></p>
                        <h3><?php echo $product['name']; ?></h3>
                        <div id="price-select">
                            <p id="price">USD $<?php echo $product['price']; ?></p>
                            <select onchange="changeQuantity(this)">
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?= $i ?>" <?= $product['quantity'] == $i ? 'selected' : '' ?>><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <hr>
                    </div>
                    
                    <i id="remove" class="fa-solid fa-trash" onclick="removeProduct(this)"></i>
                </div>
        <?php
            }
            
        } else {
            echo "<p>There are no products in the cart.</p>";
        }
        ?>

    </div>

    <div id="order-summary">
        <div id="checkout">
            <h2>Order Summary</h2>

            <p id="total">Total (<span id="total-items">0</span> items) USD$<span id="total-price">0.00</span></p>
            <form id="checkout-form" action="sql/process_order.php" method="POST" onsubmit="checkout()">
                <input type="hidden" name="selected_products" id="selected-products">
                <button type="submit">Checkout (<span id="checkout-items">0</span>)</button>
            </form>

            <p id="payment-info"><i class="fa-solid fa-circle-info"></i> Item availability and pricing are not guaranteed until payment is final.</p>
        </div>
        
        <hr>

        <h4><i class="fa-solid fa-lock"></i> Secure Privacy</h4>
        Protecting your privacy is important to us! Please be assured that your information will be kept secured and uncompromised. We will only use your information in accordance with our privacy policy to provide and improve our services to you.
        <h4><i class="fa-solid fa-shield"></i> Safe Payment Options</h4>
        GALISpace is committed to protecting your payment information. We follow PCI DSS standards, use strong encryption, and perform regular reviews of its system to protect your privacy.
        
        <div id="payment-methods">
            <p>1. Payment methods</p>
            <img src="images/shopping-cart/paypal.webp">
            <img src="images/shopping-cart/visa.webp">
            <img src="images/shopping-cart/americanexpress.webp">
            <img src="images/shopping-cart/discover.webp">
            <img src="images/shopping-cart/maestro.webp">
            <img src="images/shopping-cart/dinersclub.webp">
            <img src="images/shopping-cart/jcb.webp">
            <img src="images/shopping-cart/carnet.webp">
            <img src="images/shopping-cart/mercadopago.webp">
            
            <p>2. Security certification</p>
            <img src="images/shopping-cart/pci.webp">
            <img src="images/shopping-cart/mastercard-id-check.webp">
            <img src="images/shopping-cart/amercanexpress-safekey.webp">
            <img src="images/shopping-cart/discover-protectbuy.webp">
            <img src="images/shopping-cart/jcb-secure.webp">
            <img src="images/shopping-cart/visa-secure.webp">
            <img src="images/shopping-cart/trusted-site.webp">
        </div>
    </div>
</main>



<?php
$pageScripts = 'js/shopping-cart.js';
include "includes/layout_end.php";
?>