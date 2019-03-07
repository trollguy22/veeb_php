<?php
require_once 'db_conf.php';
function dbConnect($h, $u, $p, $db){
    $connect = mysqli_connect($h, $u, $p, $db);
    if($connect == false){
        echo 'Probleem andmebaasi ühendamisega<br>';
        exit;
    }
    return $connect;
}
function query($conn, $sql){
    $result = mysqli_query($conn, $sql);
    if($result == false){
        echo 'Probleem päringuga: <b>'.$sql.'</b><br>';
        echo mysqli_error($conn).'<br>';
        echo mysqli_errno($conn).'<br>';
    }
    return $result;
}
function dataQuery($conn, $sql){
    $result = query($conn, $sql);
    if($result != false){
        $data = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $data[] = $row;
        }
    }
    if(count($data) == 0){
        return false;
    }
    return $data;
}
$connectIKT = dbConnect(HOST, USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = dataQuery($connectIKT, $sql);
echo '<pre>';
print_r($sqlResult);
