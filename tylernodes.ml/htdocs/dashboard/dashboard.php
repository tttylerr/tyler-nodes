<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" version="1.2" href="dashboard.css" />
    <style>


         /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

.topnav .logout {
    float: right;
    background-color: red;
}

.topnav .name {
    float: right;
    color: white;
}
    </style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <?php
    if($_SESSION['username'] == "max" || $_SESSION['username'] == "tyler") {
        echo '<a href="https://dev.tylernodes.ml/dashboard/code">Translation</a>';
    }
?>
  <a href="https://dev.tylernodes.ml/">Login</a>
  <a href="https://dev.tylernodes.ml/logout.php" class="logout">Logout</a>
  <a href="" class="name"> <?php echo $_SESSION['username'];  ?>
</div>
<br>
</body>
</html>