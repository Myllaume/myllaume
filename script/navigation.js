window.addEventListener("load", function() {
    // quand tous les éléments de la page sont chargés...

    // réception des éléments utiles depuis le DOM
    var boutonBurgerNav = document.getElementById('bouton-nav');
    console.dir(boutonBurgerNav);

    var barresBurger = document.getElementsByClassName('header-accueil__burger-menu--branche');
    console.dir(barresBurger);

    var voletNav = document.getElementById('volet-nav');
    console.dir(voletNav);

    var enteteWrapper = document.getElementById('wrapper');
    console.dir(enteteWrapper);

    // recherche de la largeur du wrapper (et donc de la page)
    var largeurWrapper = enteteWrapper.offsetWidth;
    console.log(largeurWrapper);

    // largeur du header assignée à la navigation
    voletNav.style.width = largeurWrapper+'px';

    boutonBurgerNav.addEventListener("click", function() {
        voletNav.classList.toggle('nav---active');
        boutonBurgerNav.classList.toggle('header-accueil__burger-menu---active');

        for (var i = 0; i < barresBurger.length; i++) {
            var barreBurger = barresBurger[i];
            barreBurger.classList.toggle('header-accueil__burger-menu--branche---active');
        }
    });

    // bouton de retour en haut de page

    // réception du bouton
    var boutonRetourTop = document.getElementById('fleche-retour-top');
    console.dir(boutonRetourTop);

    boutonRetourTop.addEventListener("click", function() {
        window.scrollTo(0, 0); 
    });
});