<?php
session_start();
// Destroy session
if(session_destroy()) {
    // Redirecting To Home Page
    header("Location: https://dev.tylernodes.ml/login.php");
}
?>