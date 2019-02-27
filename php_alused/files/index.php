<?php

function failiKontroll($failiNimi) {
    if(is_file($failiNimi) and file_exists($failiNimi) and is_readable($failiNimi)){
        return true;
    }
    return false;
}

function loeFailist($failiNimi){
    if(failiKontroll($failiNimi)){
        $fp = fopen($failiNimi, 'r');
        while($fp){
            $rida = fgets($fp);
            echo $rida.'<br>';
        }
    }
}
loefailist('raamatud.txt');