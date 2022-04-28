<?php
include("../auth_session.php");
if ($_SESSION['username'] == "max" || $_SESSION['username'] == "tyler") {
  echo '';
} else {
    header("Location: https://dev.tylernodes.ml/dashboard/dashboard.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Code</title>
</head>
<body>
<h1>Code</h1>
<form method="get" name="form">
    <input value="Enter text here!" name="translate_text">
    <input type="submit">
</form>
<br>
<hr>
<?php

$userinput = '';
function translate_input($userinput) {
    $str1 = str_split($userinput);
    echo '<h1 style=""> Translation: ';
    foreach ($str1 as $userinput) {
        // A - a
        if ($userinput == "a") {
            $userinput = "z";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "A") {
            $userinput = "Z";
            echo $userinput;
            $userinput = null;
        }
        // B - b
        if ($userinput == "b") {
            $userinput = "y";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "B") {
            $userinput = "Y";
            echo $userinput;
            $userinput = null;
        }
        // C - c
        if ($userinput == "c") {
            $userinput = "x";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "C") {
            $userinput = "X";
            echo $userinput;
            $userinput = null;
        }
        //D - d
        if ($userinput == "d") {
            $userinput = "w";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "D") {
            $userinput = "W";
            echo $userinput;
            $userinput = null;
        }
        //E - e
        if ($userinput == "e") {
            $userinput = "v";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "E") {
            $userinput = "V";
            echo $userinput;
            $userinput = null;
        }
        //F - f
        if ($userinput == "f") {
            $userinput = "u";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "F") {
            $userinput = "U";
            echo $userinput;
            $userinput = null;
        }
        //G - g
        if ($userinput == "g") {
            $userinput = "t";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "G") {
            $userinput = "T";
            echo $userinput;
            $userinput = null;
        }
        //H - h
        if ($userinput == "h") {
            $userinput = "s";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "H") {
            $userinput = "S";
            echo $userinput;
            $userinput = null;
        }
        //I - i
        if ($userinput == "i") {
            $userinput = "r";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "I") {
            $userinput = "R";
            echo $userinput;
            $userinput = null;
        }
        //J - j
        if ($userinput == "j") {
            $userinput = "q";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "J") {
            $userinput = "Q";
            echo $userinput;
            $userinput = null;
        }
        //K - k
        if ($userinput == "k") {
            $userinput = "p";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "K") {
            $userinput = "P";
            echo $userinput;
            $userinput = null;
        }
        //L - l
        if ($userinput == "l") {
            $userinput = "o";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "L") {
            $userinput = "O";
            echo $userinput;
            $userinput = null;
        }
        //M - m
        if ($userinput == "m") {
            $userinput = "n";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "M") {
            $userinput = "N";
            echo $userinput;
            $userinput = null;
        }
        //N - n
        if ($userinput == "n") {
            $userinput = "m";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "N") {
            $userinput = "M";
            echo $userinput;
            $userinput = null;
        }
        //O - o
        if ($userinput == "o") {
            $userinput = "l";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "O") {
            $userinput = "L";
            echo $userinput;
            $userinput = null;
        }
        //P - p
        if ($userinput == "p") {
            $userinput = "k";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "P") {
            $userinput = "K";
            echo $userinput;
            $userinput = null;
        }
        //Q - q
        if ($userinput == "q") {
            $userinput = "j";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "Q") {
            $userinput = "J";
            echo $userinput;
            $userinput = null;
        }
        //R - r
        if ($userinput == "r") {
            $userinput = "i";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "R") {
            $userinput = "I";
            echo $userinput;
            $userinput = null;
        }
        //S - s
        if ($userinput == "s") {
            $userinput = "h";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "S") {
            $userinput = "H";
            echo $userinput;
            $userinput = null;
        }
        //T - t
        if ($userinput == "t") {
            $userinput = "g";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "T") {
            $userinput = "G";
            echo $userinput;
            $userinput = null;
        }
        //F - f
        if ($userinput == "u") {
            $userinput = "f";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "U") {
            $userinput = "F";
            echo $userinput;
            $userinput = null;
        }
        //V - v
        if ($userinput == "v") {
            $userinput = "e";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "V") {
            $userinput = "E";
            echo $userinput;
            $userinput = null;
        }
        // W - w
        if ($userinput == "w") {
            $userinput = "d";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "W") {
            $userinput = "D";
            echo $userinput;
            $userinput = null;
        }
        //X - x
        if ($userinput == "x") {
            $userinput = "c";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "X") {
            $userinput = "C";
            echo $userinput;
            $userinput = null;
        }
        //Y - y
        if ($userinput == "y") {
            $userinput = "b";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "Y") {
            $userinput = "B";
            echo $userinput;
            $userinput = null;
        }
        //Z - z
        if ($userinput == "z") {
            $userinput = "a";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == "Z") {
            $userinput = "A";
            echo $userinput;
            $userinput = null;
        }
        if ($userinput == " ") {
            echo " ";
        }
    }
    echo '</h1>';
}

$userinput = $_GET['translate_text'];
translate_input($userinput);
?>
</body>
</html>
<!--
A = Z
B = Y
C = X
D = W
E = V
F = U
G = T
H = S
I = R
J = Q
K = P
L = O
M = N
!>