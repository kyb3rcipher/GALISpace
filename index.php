<?php
$pageTitle = "Home";
$pageStyles = 'css/home.css';
include "includes/layout_start.php"; 
?>


<section class="main">
    <div class="row">
        <div class="col">
            <h1>GALISpace</h1>
            <p>
                Discover Your ultimate destination for space exploration. From telescopes to eclipse lenses,
                we offer top-tier equipment and unmatched expertise. Join us on our cosmic journey!
            </p>

            <button class="red-button">Discover</button>
            <a href="#highlights"><img src="images/icons/scroll-down.webp" id="scroll-down-icon"></a>
        </div>
    </div>
</section>

<section class="highlights" id="highlights">
    <h1 class="grandient-highlight-text">Explore Space Essentials</h1>
    <ul>
        <li>
            <a href="#">
                <h4><i class="fa-solid fa-rocket"></i> Simplify Your Journey</h4>
            </a>
            <p>Experience simplicity without sacrificing utility in our space gear collection! Designed with
                streamlined functionality in mind, our products offer effortless operation while delivering
                unparalleled performance. Whether you're a novice stargazer or a seasoned astronaut, our gear
                provides the tools you need to explore the cosmos with ease. Embrace simplicity without compromising
                on quality and utility. 🛰️🔍</p>
        </li>
        <li>
            <a href="#">
                <h4><i class="fa-solid fa-user-astronaut"></i> Explore the cosmos</h4>
            </a>
            <p>Explore the cosmic wonders at our virtual space hub! From cutting-edge telescopes to planetary
                exploration kits, our top-notch products are essential for any space enthusiast. Dive into the
                cosmic marvels with our quality gear. Discover the universe from the comfort of your home! <a
                    href="link_here">Unveil the cosmos</a> 🚀✨</p>
        </li>
        <li>
            <a href="#">
                <h4><i class="fa-solid fa-palette"></i> Customization</h4>
            </a>
            <p>Discover limitless possibilities in customizing our space gear! From choosing your preferred color
                palette to shaping the design according to your taste 🌌🎨, our <a href="products/index.html">products</a> offer unparalleled personalization. Tailor the
                installation process to fit your needs seamlessly. Dive into the cosmos with gear that reflects your
                unique style and preferences. Explore the universe on your terms!</p>
        </li>

        <li>
            <a href="#">
                <h4><i class="fa-solid fa-satellite"></i> Support</h4>
            </a>
            <p>Step confidently into your cosmic journey with our robust support network. Access installation <a href="https://www.youtube.com">videos</a>, detailed <a href="#">manuals</a> and remote
                assistance from our community. Whether beginner or expert, navigate challenges effortlessly. Join us
                now and unlock a universe of support for your space adventures! Launch into discovery with our
                dedicated assistance. 🌟🚀</p>
        </li>
        <li>
            <a href="#">
                <h4><i class="fa-solid fa-meteor"></i> Quality</h4>
            </a>
            <p>By using our products, you are opting for exceptional quality and incomparable durability in each of
                the materials. They are preferred by professionals from various fields and are designed to
                facilitate anyone's entry into the exciting world of space. 🛠️✨🚀</p>
        </li>
    </ul>
</section>

<section class="partners" id="partners">
    <div class="partners-container">
        <h2>Used by professionals and governments</h2>
        <h4>
            <strong>GALISpace</strong>, your one-stop shop for all things space! Explore the cosmos with our
            premium telescopes and space gear. Discover the wonders of the universe and embark on your celestial
            journey today.
        </h4>
        <p>Find out all about <strong><a class="chevron-link" href="#">Our partners</a></strong></p>
        <div class="logos">
            <div class="logos-slide">
                <ul>
                    <li>
                        <a href="https://www.nasa.gov" target="_blank">
                            <img src="images/partners/nasa.png">
                            <p>Nasa</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.esa.int/" target="_blank">
                            <img src="images/partners/esa.png">
                            <p>Esa</p>
                    </li>
                    <li>
                        <a href="http://www.roscosmos.ru/" target="_blank">
                            <img src="images/partners/roscomos.png">
                            <p>Roscomos</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spacex.com" target="_blank">
                            <img src="images/partners/spacex.svg">
                            <p>SpaceX</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.blueorigin.com/" target="_blank">
                            <img src="images/partners/blue-origin.png">
                            <p>Blue-Origin</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="logos-slide">
                <ul>
                    <li>
                        <a href="https://www.asc-csa.gc.ca/eng/" target="_blank">
                            <img src="images/partners/canada.png">
                            <p>CSA</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.cnsa.gov.cn/english/" target="_blank">
                            <img src="images/partners/cnsa.png">
                            <p>Blue-Origin</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://en.wikipedia.org/wiki/Interkosmos" target="_blank">
                            <img src="images/partners/interkosmos.png">
                            <p>Interkosmos</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="images/partners/gru.jpg">
                            <p>Gru</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.nasa.gov/" target="_blank">
                            <img src="images/partners/nasa.png">
                            <p>NASA</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="ad-video">
    <div class="container-video">
        <div class="text-container">
            <h2 class="grandient-highlight-text">leading the way in space</h2>
            <p>
                Stands out as the ultimate space emporium, offering a diverse array of premium equipment and accessories for all cosmic enthusiasts.
                Our commitment to quality and expertise ensures that every customer embarks on a journey of exploration and discovery with confidence and excitement.
            </p>
        </div>

        <div class="video-container">
            <video src="videos/ad-highlight.mp4" type="video/mp4" loop autoplay muted></video>
        </div>
    </div>
</section>


<?php
$pageScripts = 'js/home.js';
include "includes/layout_end.php";
?>