<?php
require_once 'classes/Init.php';
require_once 'classes/Koszyk.php';
$init = new Init();
$koszyk = new Koszyk();
$smarty = $init->getSmarty();
$srodek = $smarty->fetch('wyszukaj_grunt.tpl');
$smarty->assign('srodek',$srodek);
$smarty->assign('inny_styl','wyszukaj.css');
$smarty->assign('tytul','Wyszukaj grunt');
$smarty->assign('liczba_ofert',$koszyk->liczbaOfert());
$smarty->display('layout.tpl');
?>