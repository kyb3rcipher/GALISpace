<?php
$pageTitle = "Login";
$pageStyles = 'css/account.css';
include "includes/layout_start.php"; 
?>

<main>
    <h1 class="grandient-highlight-text">Login</h1>
    <div class="container">
        <form action="sql/login_user.php" method="POST">
            <label>Username/Email</label>
            <input type="text" name="username-or-email" placeholder="Username or Email" required>
            
            <label>Password:</label>
            <div id="password-container">
                <input type="password" name="password" placeholder="Password" required>
                <i class="fas fa-eye-slash toggle-password" id="togglePassword"></i>
            </div>

            <input type="submit" class="red-button" value="Login">
        </form>
        
        <div class="divider"><span>OR</span></div>
        
        <a href="#">Forgot password?</a> <br>
        Don't have an account? <a href="register.php">Sign up</a>
    </div>
</main>


<?php
$pageScripts = 'js/account.js';
include "includes/layout_end.php";
?>