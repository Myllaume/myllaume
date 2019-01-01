<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Voici la liste de tous mes projets. Il s’agit de sites web responsives, mais aussi de maquettes et articles." />
    <link rel="canonical" href="https://myllaume.fr/pages/projet.php" />
    <title>Liste des projets de Guillaume Brioudes - Myllaume</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <?php include("../include/header.php") ?>
        <main class="main row">
            <section class="main__page col-page" id="projet-web-content">
                <h1 class="main__page--titre-page">Mes projets</h1>

                <p class="main__page--intro">Voici la liste des projets que j'ai réalisé personnellement ainsi que dans le cadre de mes études.</p>

                <div class="panneau-titre">
                    <h2>Web</h2>
                    <a href="http://github.com/Myllaume" target="_blank" class="bouton">
                        <div class="bouton-volet-content">
                            <p>Voir mon GitHub</p>
                            <img src="../src/icons/icone_github.svg" alt="" class="footer__reseau--icone">
                            <div class="bouton-volet-animation"></div>
                        </div>
                    </a>
                </div>
                
                <article class="main__page__num-page">
                    <p>7</p>
                </article>
                
                <!-- injections JSON -->
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">

                <div class="panneau-titre">
                    <h2>Rédaction</h2>
                </div>

                <article class="bloc-projet titre-border_content">
                    <h3 class="titre-border">Blogging</h3>
                    <div class="bloc-projet__description row">
                        <h4>Minecraft-France</h4>
                        <p>Réalisation de plus de 90 articles sur le site de Minecraft-France.</p>
                        <a href="https://www.minecraft-france.fr/author/happlay/" target="_blank" class="bouton-little">
                            <div class="bouton-volet-content">
                                <p>Liste des articles</p>
                                <div class="bouton-volet-animation"></div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="main__page__num-page">
                    <p>8</p>
                </article>
            </section>
            <?php include("../include/footer.html"); ?>
        </main>
    </div>
    <script src="../script/main.js"></script>
    <script src="../script/projets.js"></script>
</body>

</html>