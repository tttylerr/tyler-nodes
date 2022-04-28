<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("Location: https://www.tylernodes.ml/login.php");
    exit();
}
?>