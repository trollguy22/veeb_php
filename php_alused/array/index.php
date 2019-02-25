<?php
$raamatud = array(
    array(
    'nimi' => 'Eesti side ja interneti 100 aastat',
    'autor' => 'Jaak Ulman',
    'zanr' => 'ajalugu',
    'aasta' => 2019,
    'hind' => 15
),
array(
    'nimi' => 'Infotehnoloogia käsiraamat koolidele ja iseõppijatele II',
    'autor' => 'Jaak Pihlau',
    'zanr' => 'IT',
    'aasta' => 1998,
    'hind' => 10
),
array(
    'nimi' => 'Lihtsad liharoad',
    'autor' => 'Marika Vingissar',
    'zanr' => 'kokandus',
    'aasta' => 2018,
    'hind' => 5.9
)
);
function tabeliPais($andmed){
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}
function tabeliRida($andmed){
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}
function tabel($andmed){
    echo '<table border="1">';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach ($andmed as $element){
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}
function vordleHinda($raamat1, $raamat2){
    if($raamat1['hind'] == $raamat2['hind']){
        return 0;
    } else if($raamat1['hind'] > $raamat2['hind']){
        return -1;
    } else {
        return 1;
    }
}
function filtreeriHinnaJargi($andmed, $algHind, $loppHind){
    $filreerimiseTulemus = array();
    foreach ($andmed as $element){
        if($element['hind'] >= $algHind and $element['hind'] <= $loppHind){
            $filreerimiseTulemus[] = $element;
        }
    }
    return $filreerimiseTulemus;
}
usort($raamatud, 'vordleHinda');
tabel(filtreeriHinnaJargi($raamatud, 0, 100));