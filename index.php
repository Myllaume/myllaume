<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil Myllaume</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <?php include("./include/header.php") ?>
        <main class="main row">
            <section class="main__page col-page">
                <h1 class="main__page--titre-page">Guillaume Brioudes</h1>

                <article class="main__page__presentation">
                    <img src="./src/images/photo-guillaume-brioudes.jpg" alt="" class="main__page__presentation--photo-profil">
                    <p class="main__page__presentation--texte">Passionné par le web et la rédaction j’ai trouvé mon
                        bonheur dans le style du blogging et la
                        syntaxe du code. Je suis étudiant en programmation et web design.</p>
                </article>

                <article class="main__page__competences">
                    <div class="main__page__competences__domaine">
                        <p class="main__page__competences__domaine--titres">Développement web</p>
                        <p class="main__page__competences__domaine--description">Maquettage, intégration et ergonomie</p>
                        <p class="main__page__competences__domaine--description">Développement HTML, CSS/SCSS et
                            JavaScript, PHP</p>
                    </div>
                    <div class="main__page__competences__esperluette">
                        <p><span class="text-big">&</span></p>
                    </div>
                    <div class="main__page__competences__domaine">
                        <p class="main__page__competences__domaine--titres">Rédaction web</p>
                        <p class="main__page__competences__domaine--description">Référencement web et storytelling, sur
                            papier ou CMS</p>
                        <p class="main__page__competences__domaine--description">Rédaction de textes techniques oui
                            stylisés</p>
                    </div>
                </article>

                <article class="main__page__num-page">
                    <p>1</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">
                <article class="texte-intro-accueil">
                    <p class="lettrine">Déjà avant d'entamer mes études sur le web je développais de petits sites en
                        HTML et CSS. Ces mois de développement en DUT Métiers du Multimédia et de l'Internet m'ont
                        apporté de la technique, de la méthode et la connaissance d'autres langages comme le JavaScript
                        et PHP.</p>
                    <p>Ma curiosité fait le reste. Je m'intéresse désormais au développement de projets plus
                        importants, dans les normes du web. J'aime mettre en place des mécanismes de traitement des
                        données, mettre en place une interface pour rendre ces données accessibles aux utilisateurs.</p>
                    <p>L'informatique me donne la possibilité de par le texte de créer ce que je ne sais dessiner,
                        d'afficher de l'information en bonne et due forme à l'internaute.</p>
                </article>

                <div class="row">
                    <a href="./pages/parcours.php" class="main__page__competences--bouton bouton col2">
                        <div class="bouton-volet-content">
                            <p>Voir mon parcours</p>
                            <div class="bouton-volet-animation"></div>
                        </div>
                    </a>
                    <a href="./pages/projet.php" class="main__page__competences--bouton bouton col2">
                        <div class="bouton-volet-content">
                            <p>Voir mes projets</p>
                            <div class="bouton-volet-animation"></div>
                        </div>
                    </a>
                </div>
            </section>

            <article class="main__page__num-page">
                <p>2</p>
            </article>
            </section>
            <?php include("./include/footer.html"); ?>
        </main>
    </div>
    <script src="./script/main.js"></script>
</body>

</html>