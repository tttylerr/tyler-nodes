<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body>
<?php
header("Location: dashboard/dashboard.php")
?>
<div class="headerWelcome">
    <h1 class="">Hey, <?php echo $_SESSION['username'];?>!</h1>
</div>
</body>
</html>