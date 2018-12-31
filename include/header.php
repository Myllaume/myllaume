<header class="header">

    <section class="header__raccourcis-nav header__raccourcis-nav-top">
        <div class="header__raccourcis-nav__menu-burger" id="menu-burger">
            <div class="header__raccourcis-nav__menu-burger--barre header__raccourcis-nav__menu-burger--barre---min"></div>
            <div class="header__raccourcis-nav__menu-burger--barre header__raccourcis-nav__menu-burger--barre---max"></div>
            <div class="header__raccourcis-nav__menu-burger--barre header__raccourcis-nav__menu-burger--barre---moy"></div>
        </div>
    </section>
    <nav class="header__nav-roulante">
        <a href="/" class="header__nav-roulante--item">Accueil</a>
        <a href="/pages/contact.php" class="header__nav-roulante--item">Contact</a>
        <a href="/pages/parcours.php" class="header__nav-roulante--item">Parcours</a>
        <a href="/pages/projet.php" class="header__nav-roulante--item">Projets</a>
    </nav>

</header>

<section class="volet" id="volet">
    <article class="volet__content row" id="volet-content">
        <?php
            include('volet.php');
        ?>
    </article>
</section>