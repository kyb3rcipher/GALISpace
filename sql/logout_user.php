<?php
if (!isset($_SESSION)) {
    session_start();
}

// Delete username cookie
setcookie("username", "", time() - 3600, "/");

// Destroy the session
session_unset();
session_destroy();

header("Location: /");
exit;
?>
