<?php
    $str = file_get_contents('index.json');
    $json = json_decode($str, true);
    echo '<pre>' . print_r($json, true) . '</pre>';
?>