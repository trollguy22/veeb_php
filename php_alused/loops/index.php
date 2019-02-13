<?php
for($kord = 1; $kord <=10; $kord++) {
    header('Refresh:2');
    echo $kord;
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
    }
</style>
<?php

$arv = rand(0,100);
$jaak =  $arv % 2;
if($jaak == 0) {
echo '<div class="paaris">'.$arv.'</div>';
}
else {
    echo '<div class="paaritu">'.$arv.'</div>';
}
echo '</p';
?>