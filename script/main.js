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
});

/***************************
Création d'un système de tableau à volet
 *****************************/

//  -- Repérages
var dataTabEtiquette = document.querySelectorAll('[data-tab-etiquette]');
var dataTabContent = document.querySelectorAll('[data-tab-content]');

console.log(dataTabContent);

for (var i = 0; i < dataTabEtiquette.length; i++) {
    dataTabContent[i].style.display = "none";
}

dataTabEtiquette[0].addEventListener('click', function () {
    for (var k = 0; k < dataTabEtiquette.length; k++) {
        if (k == 0) dataTabContent[k].style.display = "block";
        else {
            dataTabContent[k].style.display = "none";
        }
    }
})

dataTabEtiquette[1].addEventListener('click', function () {
    for (var k = 0; k < dataTabEtiquette.length; k++) {
        if (k == 1) dataTabContent[k].style.display = "block";
        else {
            dataTabContent[k].style.display = "none";
        }
    }
})

dataTabEtiquette[2].addEventListener('click', function () {
    for (var k = 0; k < dataTabEtiquette.length; k++) {
        if (k == 2) dataTabContent[k].style.display = "block";
        else {
            dataTabContent[k].style.display = "none";
        }
    }
})