<header>
    <div class="navbar">
        <a href="/"><img src="/images/logos/gstar.svg" class="navbar-logo"></a>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            
            <ul>
                <li><a href="/">Home</a></li>
                <li class="dropdown-menu">
                    <span>Products <i class="fa-solid fa-angle-down"></i></span>
                    <div>
                        <a href="/products/telescopes.php">Telescopes</a>
                        <a href="/products/toys.php">Toys</a>
                        <a href="/products/glasses.php">Glasses</a>
                        <a href="/products/pictures.php">Picture</a>
                        <a href="/products/audios.php">Audios</a>
                        <a href="/products/micellaneous.php">Miscellaneous</a>
                    </div>
                </li>
                <li><a href="/contact-us.php">Contact Us</a></li>
                <li><a href="/about-us.php">About Us</a></li>
                
                <?php if(isset($_COOKIE['username']) && $_COOKIE['username'] === 'admin'): ?>
                <li class="dropdown-menu">
                    <span>Admin <i class="fa-solid fa-angle-down"></i></span>
                    <div>
                        <a href="/admin/accounts.php">Accounts</a>
                        <a href="/admin/products.php">Products</a>
                        <a href="#">Orders</a>
                        <a href="/admin/messages.php">Messages</a>
                    </div>
                </li>
                <?php endif; ?>
                
                <?php if(isset($_COOKIE['username'])): ?>
                <li><a href="/shopping-cart.php" class="fas fa-shopping-cart"></a></li>
                <li id="navbar-icon" class="dropdown-menu">
                    <span><i class="fas fa-user"></i> <i class="fa-solid fa-angle-down"></i></span>
                    <div>
                        <a href="#">Account</a>
                        <a href="../sql/logout_user.php">Logout</a>
                    </div>
                </li>
                <?php else: ?>
                <li id="navbar-icon"><a href="/login.php" class="fas fa-user"></a></li>
                <?php endif; ?>
                
            </ul>
        </nav>
    </div>
</header>