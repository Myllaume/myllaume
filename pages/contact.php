<?php

include('../class/page.class.php');

$page = new Page;
$page->donnerTitre("Contact - Myllaume");
$page->donnerDepart('pages');
$page->donnerFichierHeader('header.php');
$page->donnerFichierCorps('contact.html');
$page->donnerFichierFooter('footer.html');
$page->donnerFichiersStyle(array('main.css'));
$page->donnerFichiersScript(array('main.js'));
$page->afficherCodePage();

?>