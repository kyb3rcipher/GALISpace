<?php
$pageTitle = "Register";
$pageStyles = 'css/account.css';
include "includes/layout_start.php"; 
?>


<main>
    <h1 class="grandient-highlight-text">Register</h1>
    <div class="container">
        <form>
            <label>Username</label>
            <input type="text" placeholder="Username">
            
            <label>Email</label>
            <input type="email" placeholder="example@galispace.com">

            <label>Password:</label>
            <input type="password" placeholder="Password">
            <label>Confirm password:</label>
            <input type="password" placeholder="Confirm password">

            <input type="submit" class="red-button" value="Register">
        </form>
        
        <div class="divider"><span>OR</span></div>
        
        You have an account? <a href="login.html">Login</a>
    </div>
</main>


<?php include "includes/layout_end.php"; ?>