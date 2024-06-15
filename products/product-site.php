<?php
$pageTitle = "Example Product Site";
$pageStyles = '/css/product.css';
include "../includes/layout_start.php";

require_once '../sql/database.php';
$conn = connectToDatabase();

$productID = $_GET['product_id'];

$product = $conn->query("SELECT * FROM products WHERE id='$productID'")->fetch_assoc();
?>

<main>
    <div id="product-container">
        <div id="product-container-main">
            <img src="../<?php echo $product['media']; ?>">

            <div id="left-container">
                <h2><?php echo $product['name']; ?></h2>
                <div id="stars">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>

                <p id="price">USD $<?php echo $product['price']; ?></p>
                

                <div id="description">Description:
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae voluptatum asperiores quas eligendi laborum aliquam dolore repellat dolorem officiis ullam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur dolorum repellat eaque minima sit officia sed repudiandae laborum ut ea.</p>
                </div>

                <label for="quantity-select">Qty:</label>
                <select name="quantity-select" id="quantity-select" onchange>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                
                <form action="add_product_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="product_type" value="<?php echo $product['type']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                    <input type="hidden" name="product_media" value="<?php echo $product['media']; ?>">
                    <button type="submit" id="buy-button" class="red-button">Add to cart</button>
                </form>

                <hr id="return-separation">

                <div id="return">
                    <span><i class="fa-solid fa-truck-fast"></i> Free shipping on all orders over $100</span>
                    <p>All our purchases over $100 dollars have totally free national shipping</p>
                    <span><i class="fa-solid fa-shield"></i> Security and Guarantee in payment</span>
                    <p>Our purchases have a tracking guarantee as well as the delivery of our products. If due to any oversight the product arrives damaged, our 30-day guarantee will replace it.</p>
                    <span><i class="fa-solid fa-boxes-packing"></i> Free returns</span>
                    <p>You have up to two months after purchasing the product to claim a free return of the product if it is in optimal condition.</p>
                    <span><i class="fa-solid fa-leaf"></i> Sustaintity at GALISpace (10M+ trees)</span>
                    <p>Our products are 100% made with recycled materials as well as supporting our GALIEarth foundation in which we help the planet.</p>
                </div>
                
            </div>
        </div>
        
        <hr id="product-description-separation">
        
        <div id="product-description">
            <h3>Description:</h3>
            <ul>
                <li>Comfortable and breathable: Made with high-quality materials, these socks are perfect for all-day wear.</li>
                <li>Stylish design: The star pattern adds a touch of fun and personality to any outfit.</li>
                <li>Versatile: These mid-tube socks can be worn with sneakers, boots, or even heels for a trendy look.</li>
                <li>Value pack: With 5 pairs included, you'll have plenty of socks to last you through the week.</li>
                <li>Perfect gift: Surprise your friends and family with these cute and comfy socks.</li>
            </ul>
            <h3>Specifications:</h3>
            <table>
                <tr>
                    <td>Type</td>
                    <td>Refractor</td>
                </tr>
                <tr>
                    <th>Type of build</th>
                    <td>Astrograph</td>
                </tr>
                <tr>
                    <th>Aperture (mm)</th>
                    <td>68</td>
                </tr>
                <tr>
                    <th>Focal length (mm)</th>
                    <td>260</td>
                </tr>
                <tr>
                    <th>Aperture ratio (f/)</th>
                    <td>3.8</td>
                </tr>
                <tr>
                    <th>Resolving capacity</th>
                    <td>2.03</td>
                </tr>
                <tr>
                    <th>Limit value (mag)</th>
                    <td>12.3</td>
                </tr>
                <tr>
                    <th>Light gathering capacity</th>
                    <td>90</td>
                </tr>
                <tr>
                    <th>Max. useful magnification</th>
                    <td>136</td>
                </tr>
                <tr>
                    <th>Tube weight (kg)</th>
                    <td>3.8</td>
                </tr>
                <tr>
                    <th>Carrying length (mm)</th>
                    <td>346</td>
                </tr>
                <tr>
                    <th>Tube length (mm)</th>
                    <td>410</td>
                </tr>
                <tr>
                    <th>Coating</th>
                    <td>SMC multi-coating</td>
                </tr>
                <tr>
                    <th>Stray light baffles in the OTA</th>
                    <td>yes</td>
                </tr>
                <tr>
                    <th>Lens design</th>
                    <td>Quadruplet</td>
                </tr>
                <tr>
                    <th>Glass material</th>
                    <td>OHARA FPL-53</td>
                </tr>
            </table>
        </div>
          
    </div>

    <div id="similar-products-slider">
        <h2 id="title">Similar products:</h2>
        <div class="products-slider">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
            <li class="card">
                <img src="../images/products/telescopes/Omegon-Telescope-N-114-900-EQ-1.jpg" draggable="false">
                <h2>Omegon N 114/900 EQ-1</h2>
                <span>$10000.00</span>
            </li>
            <li class="card">
                <img src="../images/products/glasses/eclipse-glasses-classic.jpg" draggable="false">
                <h2>Eclipse glasses classic</h2>
                <span>$30.00</span>
            </li>
            <li class="card">
                <img src="../images/products/toys/LEGO-21340.jpg" draggable="false">
                <h2>Spacial Era 21340</h2>
                <span>$70.00</span>
            </li>
            <li class="card">
                <img src="../images/products/micellaneous/binoculars.jpg" draggable="false">
                <h2>Binoculars Prismatics (8x)</h2>
                <span>$23.00</span>
            </li>
            <li class="card">
                <img src="../images/products/pictures/iss071e05057.jpg" alt="img" draggable="false">
                <h2>SpaceX Dragon Endeavour</h2>
                <span>$100.00</span>
            </li>
            <li class="card">
                <img src="../images/products/glasses/sun-glasses.jpg" alt="img" draggable="false">
                <h2>Sun glasses</h2>
                <span>$80.00</span>
            </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>
    
</main>


<?php
$pageScripts = '/js/product.js';
include "../includes/layout_end.php";
?>