<?php


/**
 * function paarsuseKontroll
 * @param $arv
 * print is $arv even or add
 */
function paarsuseKontroll($arv){
    if($arv % 2 == 0) {
        $kontroll = $arv.' on paaris<br>';
    } else {
       $kontroll = $arv.' on paaritu<br>';
    }
    return $kontroll;
}
for($arv = 0; $arv <=10; $arv++) {
   $kontroll = paarsuseKontroll($arv);
   echo $kontroll;
}