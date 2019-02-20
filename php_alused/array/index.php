<?php
    $porsad = array(
         array(
            'Peppa',
            'naine',
            4,
            1.04
        ),
        array(
        'geogre',
        'mees',
        2,
        0.95
    )
);
echo $porsad[0][0].'<br>';
echo $porsad[1][1].'<br>';
echo $porsad[2][2].'<br>';
echo $porsad[3][3].'<br>';

echo '<hr>';

for($i = 0; $i < count($porsad); $i++) {
    for($j = 0; $j < count($porsad[$i][$j]); $j++){
        echo $porsad[$i][$j].'<br>';
    }
}
echo '<hr>';

foreach ($porsad as $porsas) {
    foreach ($porsas as $element){
        echo $element.'<br>';
    }
echo '<hr>';
}
