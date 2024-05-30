<?php
$pageTitle = "Example Audio Product Site";
$pageStyles = '/css/product.css';
include "../includes/layout_start.php"; 
?>


<main>
    <div id="product-container">
        <div id="product-container-main">
            <video src="../videos/hubble-deep-space.mp4" type="video/mp4" loop autoplay muted></video>
            <audio controls autoplay loop src="../audios/hubble-deep-space.mp3" type="audio/mpeg"><211/audio>

            <div id="left-container">
                <h2>Telescope Achromat Bresser AC 90/900 EXOS-1</h2>
                <div id="stars">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>

                <p id="price">USD $386.00</p>
                

                <div id="description">Description:
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae voluptatum asperiores quas eligendi laborum aliquam dolore repellat dolorem officiis ullam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur dolorum repellat eaque minima sit officia sed repudiandae laborum ut ea.</p>
                </div>

                <label for="quantity-select">Qty:</label>
                <select name="quantity-select" id="quantity-select">
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
                
                <button id="buy-button" class="red-button">Add to cart</button>
                
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