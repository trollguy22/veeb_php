<?php


/**
 * function paarsuseKontroll
 * @param $arv
 * print is $arv even or add
 */
function paarsuseKontroll($arv){
    if($arv % 2 == 0) {
        echo $arv.' on paaris<br>';
    } else {
       echo $arv.' on paaritu<br>';
    }
}