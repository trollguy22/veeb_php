<?php
$peppa = array(
    'nimi' => 'Peppa',
    'sugu' => 'naine',
    'vanus' => 4,
    'pikkus' => 1.04
);
$george = array (
    'nimi' => 'George',
    'sugu' => 'mees',
    'vanus' => 2,
    'pikkus' => 0.95
);

$porsad[0][] = 'punane';
$porsad[1][] = 'sinine';

$porsad = array();
$porsad['peppa'] = $peppa;
$porsad['george'] = $george;

foreach ($peppa as $nimi => $vaartus) {
    echo $nimi.' - '.$vaartus.'<br>';
}

echo '<hr>';
$porsad['peppa']['lemmik_varv'] = 'punane';
$porsad['george']['lemmik_varv'] = 'sinine';

foreach ($george as $nimi => $vaartus) {
    echo $nimi . ' - ' . $vaartus . '<br>';

foreach ($porsad as $porsaseNimi=>$porsaseandmed)
    echo '<b>' . $porsaseNimi . '</b><br>';
}
    foreach ($prosaseAndmed as $nimetus=>$vaartus)
    {
        echo '<dd>'.$nimetus.' - '.$vaartus.'<dd>';
}

//echo  '<pre>';
//print_r($porsad);
//echo '</pre>'
