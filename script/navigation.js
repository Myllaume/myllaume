window.addEventListener("load", function() {
    // quand tous les éléments de la page sont chargés...

    // réception des éléments utiles depuis le DOM
    var boutonBurgerNav = document.getElementById('bouton-nav');
    console.dir(boutonBurgerNav);

    var barresBurger = document.getElementsByClassName('header-accueil__burger-menu--branche');
    console.dir(barresBurger);

    var voletNav = document.getElementById('volet-nav');
    console.dir(voletNav);

    var enteteHeader = document.getElementById('entete');
    console.dir(enteteHeader);

    // recherche des information sur la largeur du header
    var detailHeader = enteteHeader.getBoundingClientRect();
    console.log(detailHeader);

    var largeurHeader = detailHeader.width;
    console.log(largeurHeader);

    // largeur du header assignée à la navigation
    voletNav.style.width = largeurHeader+'px';

    boutonBurgerNav.addEventListener("click", function() {
        voletNav.classList.toggle('nav-accueil---active');
        boutonBurgerNav.classList.toggle('header-accueil__burger-menu---active');

        for (var i = 0; i < barresBurger.length; i++) {
            var barreBurger = barresBurger[i];
            barreBurger.classList.toggle('header-accueil__burger-menu--branche---active');
        }
    });
});