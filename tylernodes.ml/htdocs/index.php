<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
} else {
    header("Location: dashboard/dashboard.php");
    exit();
}

?>

<html>
  <head>
    
  </head>
  <body>
    
  </body>
</html>