<!DOCTYPE HTML>
<html>
<body>
<form method="get" action="'.$_SERVER['PHP_SELF'].'">
    <select name="sorteeri">
        <option value="odavam ette">odavam ette</option>
        <option value="kallim ette">kallim ette</option>
    </select>
    <input type="submit" name="sorteeri">
</form>

</body>
</html>
<?php
function failiKontroll($failiNimi){
    if(file_exists($failiNimi) and is_file($failiNimi) and is_readable($failiNimi)){
        return true;
    }
    return false;
}

function loeFailist($failiNimi){
    $raamatud = array();
    $nimetused = array(
        'nimetus',
        'autor',
        'keel',
        'lk',
        'hind'
    );
    if(failiKontroll($failiNimi)){
        $fp = fopen($failiNimi, 'r');
        $raamat = array();
        while(!feof($fp)){
            $rida = fgets($fp);
            if(trim($rida) != ''){
                $raamat[] = $rida;
            } else {
                $raamat = array_combine($nimetused, $raamat);
                $raamatud[] = $raamat;
                $raamat = array();
            }
        }
    }
    return $raamatud;
}
function tabelFailist($failiNimi){
    if(failiKontroll($failiNimi)) {
        $fp = fopen($failiNimi, 'r');
        echo '<table border="1">';
        echo '<tr>';
        while (!feof($fp)) {
            $rida = fgets($fp);
            if(trim($rida) != ''){
                echo '<td>'.$rida.'</td>';
            } else {
                echo '</tr>';
            }
        }
        echo '</table>';
    }
}
tabelFailist('raamatud.txt');