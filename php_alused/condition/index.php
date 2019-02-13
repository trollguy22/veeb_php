<?php
$eesNimi = 'Joel';
$pereNimi = 'Purasson';
$vanus = 18;
$kaal = 85;
$sugu = 'mees';

$arv = rand(0,100);
$jaak =  $arv % 2;
echo $arv.' = ';
if($jaak == 0) {
echo '<div class="paaris">'.$arv.'</div>';
}
else {
    echo '<div class="paaritu">'.$arv.'</div>';
}
echo '</p';
?>