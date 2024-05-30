<?php
$pageTitle = "Audios";
$pageStyles = '/css/products.css';
include "../includes/layout_start.php"; 
?>


<main>
    <h1 class="grandient-highlight-text">Audios</h1>
    
    <div class="products">
        <!-- Product card start -->
        <div class="card">
            <video src="../videos/hubble-deep-space.mp4" type="video/mp4" loop autoplay muted></video>
            <audio controls><source src="../audios/black-hole.mp3" type="audio/mpeg"></audio>
            <h4>Audio</h4>
            <h2>Black Hole</h2>
            <div class="box">
                <p>$30.00</p>
                <a href="product-site.php"><a href="product-site.php"><button>Buy Now</button></a></a>
            </div>
        </div>
        <!-- Product card end -->

        <!-- Product card start -->
        <div class="card">
            <video src="../videos/hubble-deep-space.mp4" type="video/mp4" loop autoplay muted></video>
            <audio controls><source src="../audios/the-weeknd-for-dolby-atmos.mp3" type="audio/mpeg"></audio>
            <h4>Dolby Atmos Audio</h4>
            <h2>The Weeknd</h2>
            <div class="box">
                <p>$70.00</p>
                <a href="product-site.php"><button>Buy Now</button></a>
            </div>
        </div>
        <!-- Product card end -->
        
        <!-- Product card start -->
        <div class="card">
            <video src="../videos/hubble-deep-space.mp4" type="video/mp4" loop autoplay muted></video>
            <audio controls><source src="../audios/space-universe-by-boody-mary.mp3" type="audio/mpeg"></audio>
            <h4>Audio</h4>
            <h2>Space Universe</h2>
            <div class="box">
                <p>$80.00</p>
                <a href="product-site.php"><button>Buy Now</button></a>
            </div>
        </div>
        <!-- Product card end -->

        <!-- Product card start -->
        <!-- https://www.youtube.com/watch?v=H-Ci_YwfH04 -->
        <div class="card">
            <video src="../videos/hubble-deep-space.mp4" type="video/mp4" loop autoplay muted></video>
            <audio controls><source src="../audios/hubble-deep-space.mp3" type="audio/mpeg"></audio>
            <h4>Audio</h4>
            <h2>Hubble in deep space</h2>
            <div class="box">
                <p>$80.00</p>
                <a href="product-site.php"><button>Buy Now</button></a>
            </div>
        </div>
        <!-- Product card end -->
        
    </div>
</main>


<?php include "../includes/layout_end.php"; ?>