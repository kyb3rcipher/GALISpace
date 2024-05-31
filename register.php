<?php
$pageTitle = "Register";
$pageStyles = 'css/account.css';
include "includes/layout_start.php"; 
?>


<main>
    <h1 class="grandient-highlight-text">Register</h1>
    <div class="container">
        <form action="sql/register_user.php" method="POST">
            <label>Username</label>
            <input type="text" id="username" name="username" placeholder="Username" required>
            
            <label>Email</label>
            <input type="email" name="email" placeholder="example@galispace.com" required>

            <label>Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <label>Confirm password:</label>
            <input type="password" id="confirm-password" placeholder="Confirm password" required>

            <input type="submit" class="red-button" value="Register">
        </form>
        
        <div class="divider"><span>OR</span></div>
        
        You have an account? <a href="login.php">Login</a>
    </div>
</main>


<?php include "includes/layout_end.php"; ?>