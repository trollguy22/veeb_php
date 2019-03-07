<?php
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
$time = date( 'G:i' , time()+120*60);
echo $paev.'.'.$kuu.' '.$aasta.' '.$time.'<br>';

$eesti_paevad = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede','laupäev', 'pühapäev');

$paev1 = $eesti_paevad = date('l');
echo $paev1.'<br>';

$sp = mktime(0,0,0,06,24,2019);

$jaanipaev = $sp;
$vahe = $sp - date('d','m','Y');
$vastus = $vahe/(60*60*24);
echo $vastus.'<br>';