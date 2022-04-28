<?php
//The start for managing login/logout.
$sname = 'sql211.epizy.com';
$uname = 'epiz_31189234';
$password = 'Cnsze1SO5Tk';
$dbname = 'epiz_31189234_users';
$con = mysqli_connect($sname,$uname,$password,$dbname);

if (!$con) {

    echo "Error: Node Connection Failed.";

}

?>