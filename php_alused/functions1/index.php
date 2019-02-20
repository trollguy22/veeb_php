<?php


/**
 * function paarsuseKontroll
 * @param $arv
 * print is $arv even or add
 */
function kasPaaris($arv){
    if($arv % 2 == 0) {
        $kontroll = true;
    } else {
       $kontroll = false;
    }
    return $kontroll;
}

function kasAlgarv($arv){
    $jagaja = 2;
    if($arv == 0 or $arv == 1) {
        $kontroll = true;
    } else {
        while ($arv % $jagaja != 0) $jagaja++;
        if ($arv == $jagaja) {
            $kontroll = true;
        } else {
            $kontroll = false;
        }
    }
    return $kontroll;
}
function arvudeTabel(){


}