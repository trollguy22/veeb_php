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
$tabeli_pealkiri = array_keys($raamatud[0]);
echo '<table border="1">';
tabeliPais($tabeli_pealkiri);
echo '</table>';
