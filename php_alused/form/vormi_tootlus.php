<?php
extract($_GET);
//$nimi = $_GET['nimi'];
//$parool = $_GET['parool'];
foreach ($_GET as $nimetus => $vaartus) {
    if(strlen($_GET[$nimetus]) == 0) {
        header('Location: index.html');
    }
}
if(strlen($nimi) == 0 or strlen($parool) == 0){
    header('Location: index.html');
} else {
    echo 'Tere ' . $nimi . '!<br>';
    echo 'Sinu parooliks on ' . $parool;
}