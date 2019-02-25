<?php
extract($_GET);
//$nimi = $_GET['nimi'];
//$parool = $_GET['parool'];

    foreach ($_GET AS $nimetus => $vaartus){
        echo $nimetus.' => '.$vaartus.'<br>';
}
$silRuumala = (3.14 * $raadius * $raadius * $korgus);
echo 'Silindri ruumala on '.$silRuumala.'<br>';

$kooRuumala = (3.14 * $raadius * $raadius * $korgus * 0.3);
echo 'Koonuse ruumala on '.$kooRuumala.'<br>';

$keraRuumala = (1.3 * 3.14 * $raadius * $raadius * $raadius);
echo 'Kera ruumala on '.$keraRuumala.'<br>';