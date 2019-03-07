<?php
require_once 'db_conf.php';

function dbConnect($h, $u, $p, $db){
    $connect = mysqli_connect($h, $u, $p, $db);
    if($connect == false){
        echo 'Problem andmebaasi ühendamisega<br>';
        exit;
    }
    return $connect;
}

$connectIKT = dbConnect(HOST, USER, PASS, DB);
