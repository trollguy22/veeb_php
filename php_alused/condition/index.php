<?php
$eesNimi = 'Joel';
$pereNimi = 'Purasson';
$vanus = 18;
$kaal = 85;
$sugu = 'mees';

if($sugu == 'mees'){echo '<p style="color: blue;">';
}
else {
   echo '<p style="color: red;">';
}
echo 'Minu nimi on '.$eesNimi.'<br>';
echo 'Minu perenimi on '.$pereNimi.'<br>';
echo 'Olen '.$vanus.' aastat vana<br>';
echo 'Kaalun '.$kaal.' kg<br>';

?>