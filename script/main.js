/***************************
Menu déroulant
 *****************************/

// -- VOLET NAVIGATION
var boutonBurger = document.getElementById('menu-burger');
var sectionVolet = document.getElementById('volet');
var voletContent = document.getElementById('volet-content');

boutonBurger.addEventListener('click', function () {
    // fonction qui fait interrupteur actif/inactif sur un volet

    sectionVolet.classList.toggle('volet---active');
    voletContent.classList.toggle('volet__content---active');
    boutonBurger.classList.toggle('header__raccourcis-nav__menu-burger--rotated');
});