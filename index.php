<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Je m'appelle Guillaume Brioudes et suis étudiant et développement et design web. Je créer et intègre des maquettes responsives." />
    <link rel="canonical" href="https://myllaume.fr/" />
    <title>Myllaume, site de Guillaume Brioudes</title>
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
                        syntaxe du code. Je suis étudiant en programmation et design web.</p>
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
                        <p class="main__page__competences__domaine--description">Rédaction de textes techniques ou
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
                    <p class="lettrine">Bienvenue sur mon petit bout de web. Ici je crée avec passion du contenu pour les internautes en parallèle de mes études en intégration et design de sites responsives. J’aime le code, la syntaxe, les mots et tout logiquement la <strong>rédaction et le développement web</strong>.</p>
                    <p>Sur ce site vous pourrez trouver une présentation de mon parcours, de mes études, expériences professionnelles et bénévoles. Vous pourrez aussi découvrir les différents projets personnels ou d’étude que je mène ou qui sont déjà terminés. Je suis actuellement à la recherche de projets et de stages, donc si vous avez des propositions, <a href="/pages/contact.php">n’hésitez pas à me contacter</a> !</p>
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