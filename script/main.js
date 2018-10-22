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

// -- Fonctions

function afficherTabContent(etiquetteClick) {
    var numEtiquette = etiquetteClick.dataset.tabEtiquette;
    var etiquetteSelect = document.querySelectorAll("[data-tab-content=\""+numEtiquette+"\"]");
    console.log(etiquetteSelect);
    etiquetteSelect.classList.add('tab-visible');
}

// -- Traitement

for (var p = 0; p < dataTabEtiquette.length; p++) {
    var etiquette = dataTabEtiquette[p];

    etiquette.addEventListener('click', function () {
        var etiquetteClick = this;
        afficherTabContent(etiquetteClick);
    });
}