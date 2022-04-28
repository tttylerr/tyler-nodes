<?php

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

    ?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>HOME</title>

        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>

    <h1>Hello, <?php echo $_SESSION['username']; ?>, you are the <?php echo $_SESSION['id']; ?> user!</h1>

    <a href="logout.php">Logout</a>

    </body>

    </html>

<?php
    }else{

    header("Location: index.php");

exit();

}
    ?>