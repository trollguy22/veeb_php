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

function query($conn, $sql){
    $result = mssql_query($conn, $sql);
    if($result == false){
        echo  'Probleem päringuga: <b>'.$sql.'</b><br>';
        echo mysqli_error($conn).'<br>';
        echo mysqli_errno($conn).'<br>';
    }
    return $result;
}
$connectIKT = dbConnect(HOST, USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = query($connectIKT, $sql);


