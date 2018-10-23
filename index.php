<?php

include('./class/page.class.php');

$page = new Page;
$page->donnerTitre("Parcours - Myllaume");
$page->donnerDepart('racine');
$page->donnerFichierHeader('header.php');
$page->donnerFichierCorps('accueil.html');
$page->donnerFichierFooter('footer.html');
$page->donnerFichiersStyle(array('main.css'));
$page->donnerFichiersScript(array('main.js'));
$page->afficherCodePage();

?>