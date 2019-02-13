<?php
$eesNimi = 'Joel';
$pereNimi = 'Purasson';
$vanus = 18;
$kaal = 85;
$sugu = 'mees';

switch ($sugu) {
    case 'mees':
        echo '<p style="color: blue">';
        break;
    case 'naine':
        echo '<p style="color: red">';
        break;
    default:
        echo '<p style="color: green">';
}
echo 'Minu nimi on '.$eesNimi.'<br>';
echo 'Minu perenimi on '.$pereNimi.'<br>';
echo 'Olen '.$vanus.' aastat vana<br>';
echo 'Kaalun '.$kaal.' kg<br>';

?>