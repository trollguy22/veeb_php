<?php
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
$time = date( 'G:i' , time()+120*60);
echo $paev.'.'.$kuu.' '.$aasta.' '.$time;
'<br>';

$eesti_paevad = array(2=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede','laupäev', 'pühapäev');

$paev1 = $eesti_paevad[date('d')];
echo $paev1;
