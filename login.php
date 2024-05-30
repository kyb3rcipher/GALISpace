<?php
$pageTitle = "Login";
$pageStyles = 'css/account.css';
include "includes/layout_start.php"; 
?>


<main>
    <h1 class="grandient-highlight-text">Login</h1>
    <div class="container">
        <form>
            <label>Username</label>
            <input type="text" placeholder="Username">
            
            <label>Password:</label>
            <input type="password" placeholder="Password">

            <input type="submit" class="red-button" value="Login">
        </form>
        
        <div class="divider"><span>OR</span></div>
        
        <a href="#">Forgot password?</a> <br>
        Don't have an account? <a href="register.html">Sign up</a>
    </div>
</main>


<?php include "includes/layout_end.php"; ?>