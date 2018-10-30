<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parcours - Myllaume</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <?php include("../include/header.php") ?>
        <main class="main row">
            <section class="main__page col-page">
                <h1 class="main__page--titre-page">Mon parcours</h1>

                <article class="main__page__outils">
                    <h2 class="titre-border">Outils</h2>
                    <div class="main__page__outils__content row">
                            <img src="../src/icons/icone_js.svg" alt="" class="main__page__outils__content--icone">
                            <img src="../src/icons/icone_php.svg" alt="" class="main__page__outils__content--icone">
                            <img src="../src/icons/icone_css.svg" alt="" class="main__page__outils__content--icone">
                            <img src="../src/icons/icone_wordpress.svg" alt="" class="main__page__outils__content--icone">
                            <img src="../src/icons/icone_xd.svg" alt="" class="main__page__outils__content--icone">
                            <img src="../src/icons/icone_git.svg" alt="" class="main__page__outils__content--icone">
                            <img src="../src/icons/icone_office.svg" alt="" class="main__page__outils__content--icone">
                </article>

                <article class="main__page__competence">
                    <h2 class="titre-border">Compétences</h2>
                    <p class="main__page__competence--item">Développer le visuel d'un site</p>
                    <p class="main__page__competence--item">Dynamiser un site</p>
                    <p class="main__page__competence--item">Rédiger des articles</p>
                    <p class="main__page__competence--item">Administrer Wordpress</p>
                    <p class="main__page__competence--item">Dessiner un site</p>
                    <p class="main__page__competence--item">Référencer un site</p>
                </article>

                <article class="main__page__num-page">
                    <p>5</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">

                <article class="main__page__experiences">
                    <h2 class="titre-border">Expériences</h2>

                    <h3>Études</h3>
                    <div class="main__page__experiences__content">
                        <div class="main__page__experiences__content__activite">
                            <div class="case-a-cocher"></div>
                            <p>DUT Métiers du Multimédia et l'Internet</p>
                            <p class="date">2017-2019</p>
                        </div>
                        <div class="main__page__experiences__content__activite">
                            <div class="case-coche">
                                <div class="case-coche--branche-petite"></div>
                                <div class="case-coche--branche-grande"></div>
                            </div>
                            <p>Baccalauréat Littéraire spécialité cinéma</p>
                            <p class="date">2016-2017</p>
                        </div>
                    </div>

                    <h3>Activités associatives</h3>
                    <div class="main__page__experiences__content">
                        <div class="main__page__experiences__content__activite">
                            <p>Secrétaire général <a href="http://aeaih.org/">AEAIH</a></p>
                            <p class="date">2017-2019</p>
                        </div>
                        <div class="main__page__experiences__content__activite">
                            <p>Animateur enfant 9-11 ans <a href="https://www.sgdf.fr/le-mouvement/en-bref">SGDF</a></p>
                            <p class="date">2017-2019</p>
                        </div>
                    </div>

                    <h3>Activités professionnelles</h3>
                    <div class="main__page__experiences__content">
                        <div class="main__page__experiences__content__activite">
                            <p>Employé commercial Leclerc</p>
                            <p class="date">Étés 2017 et 2018</p>
                        </div>
                    </div>
                </article>

                <article class="main__page__num-page">
                    <p>6</p>
                </article>
            </section>
            <?php include("../include/footer.html"); ?>
        </main>
    </div>
    <script src="../script/main.js"></script>
</body>

</html>