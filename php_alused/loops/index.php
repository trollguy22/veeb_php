<?php
for($kord = 1; $kord <=10; $kord++) {
    header('Refresh:1');
 }
?>
<style>
    div {
        margin: auto;
        width: 100px;
        height: 100px;
        font-size: 75px;
        vertical-align: middle;
        text-align: center;
        padding-top: 15px;
    }
    .paaris{
        background: red;
    }
    .paaritu{
        background: green;
    .algarv{
        background: deepskyblue;
    }
    .tavaline{
        background: lightgray;
    }
</style>
<?php

$arv = rand(0,100);
$jagaja = 2;
//niikaua kuni jääk ei ole 0
while($arv % $jagaja != 0){
    $jagaja++;
}
// kui arv ja jagaja on võrdsed, on algarv
$jaak =  $arv % 2;

if($arv == $jagaja) {
echo '<div class="algarv">'.$arv.'</div>';
}
else {
    if ($arv % 2 == 0) {
        echo '<div class="paaris">' . $arv . '</div>';

    } else {
        echo '<div class="paaritu">' . $arv . '</div>';
    }
}
echo '</p';
?>