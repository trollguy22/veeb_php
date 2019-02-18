<?php
$allikas = 'lipsum.txt';
//ava fail
$minu_fail = fopen($allikas, 'w');
//faili sulgemine
fclose($minu_fail);