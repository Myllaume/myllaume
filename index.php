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
                </article>

                <article class="main__page__num-page">
                    <p>1</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">
                <section class="main__page__code">
                    <article>

                    </article>
                    <p class="lettrine">Déjà avant d'entamer mes études sur le web je développais de petits sites en
                        HTML et CSS. Ces mois de développement en DUT Métiers du Multimédia et de l'Internet m'ont
                        apporté de la technique, de la méthode et la connaissance d'autres langages comme le JavaScript
                        et PHP.</p>
                    <p>Ma curiosité fait le reste. Je m'intéresse désormais au développement de projets plus
                        importants, dans les normes du web. J'aime mettre en place des mécanisme de traitement des
                        données, mettre en place une interface pour rendre ces données accessibles aux utilisateurs.</p>
                    <p>L'informatique me donne la possibilité de par le texte créer ce que je ne sais dessiner,
                        d'afficher de l'informatique en bonne et due forme à l'internaute.</p>

                    <article>
                        <img src="./src/images/image_code.jpg" alt="" class="image-decorative">
                        <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px"
                            href="https://unsplash.com/@pankajpatel?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
                            target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Pankaj Patel"><span
                                style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg"
                                    style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white"
                                    viewBox="0 0 32 32">
                                    <title>unsplash-logo</title>
                                    <path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path>
                                </svg></span><span style="display:inline-block;padding:2px 3px">Pankaj Patel</span></a>
                    </article>
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