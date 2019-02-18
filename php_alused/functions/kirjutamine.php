<?php
$allikas = 'lipsum.txt';
$tekst = "Nunc non lorem\n";
//avab-kirjutab-sulgeb
file_put_contents($allikas, $tekst, FILE_APPEND);