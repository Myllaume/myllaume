<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet - Myllaume</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <?php include("../include/header.php") ?>
        <main class="main row">
            <section class="main__page col-page">
                <h1 class="main__page--titre-page">Mes projets</h1>

                <p>Voici la liste des projets que j'ai réalisé personnelement et aussi dans le cadre de mes études.</p>

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

                <article class="bloc-projet">
                    <h3 class="titre-border">Maquette</h3>
                    <div class="bloc-projet__description row">
                        <img src="../src/images/projet_schprochrenner.png" alt="" class="bloc-projet--image">
                        <h4>Schprochrener</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, vitae?</p>
                        <a href="" class="bouton-little">
                            <div class="bouton-volet-content">
                                <p>Voir</p>
                                <div class="bouton-volet-animation"></div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="bloc-projet">
                    <h3 class="titre-border">Site</h3>
                    <div class="bloc-projet__description row">
                        <img src="../src/images/projet_myllaume.png" alt="" class="bloc-projet--image">
                        <h4>Myllaume, v1</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, vitae?</p>
                        <a href="" class="bouton-little">
                            <div class="bouton-volet-content">
                                <p>Voir</p>
                                <div class="bouton-volet-animation"></div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="main__page__num-page">
                    <p>7</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">

                <div class="panneau-titre">
                    <h2>Rédaction</h2>
                    <a href="https://medium.com/@myllaume" target="_blank" class="bouton">
                        <div class="bouton-volet-content">
                            <p>Voir mon Medium</p>
                            <img src="../src/icons/icone_medium.svg" alt="" class="footer__reseau--icone">
                            <div class="bouton-volet-animation"></div>
                        </div>
                    </a>
                </div>

                <article class="bloc-projet">
                    <h3 class="titre-border">Xxxxxxx</h3>
                    <div class="bloc-projet__description">
                        <p></p>
                        <a href="" class="bouton-little">Voir</a>
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
</body>

</html>