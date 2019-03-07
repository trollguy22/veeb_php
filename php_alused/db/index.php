<?php
require_once 'db_conf.php';
require_once 'db_fnc.php';

$connectIKT = dbConnect(HOST, USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = dataQuery($connectIKT, $sql);
echo '<pre>';
print_r($sqlResult);
