<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site web de Guillaume Brioudes</title>

    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>

    <div class="wrapper" id="wrapper">

        <?php
            include('include/header.php');
        ?>

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
                    <a href="#" class="main__page__competences--bouton bouton">Voir mes compétences</a>
                    <a href="#" class="main__page__competences--bouton bouton">Voir mes projets</a>
                </article>

                <article class="main__page__num-page">
                    <p>1</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">
                <section class="main__page__code" data-tab="tableau">
                    <div data-tab="chaine">
                        <div class="tabs--etiquette" data-tab-etiquette="1">
                            <p>HTML</p>
                        </div>
                        <div class="tabs--etiquette" data-tab-etiquette="2">
                            <p>CSS</p>
                        </div>
                        <div class="tabs--etiquette" data-tab-etiquette="3">
                            <p>CSS</p>
                        </div>
                    </div>
                    <article class="main__page__code__content tab-content tab-visible" data-tab-content="1">
                        <p><span class="code-bleu">&lt;!</span><span class="code-rouge">DOCTYPE</span> <span class="code-violet">html</span><span
                                class="code-bleu">&gt;</span></p>
                        <p><span class="code-bleu">&lt;p&gt;</span>Du code HTML<span class="code-bleu">&lt;p&gt;</span></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam placeat voluptatibus
                            atque nostrum at repudiandae nisi molestias deserunt, suscipit voluptas blanditiis cum
                            quibusdam reprehenderit totam error itaque! Placeat, at quasi.</p>
                    </article>
                    <article class="main__page__code__content tab-content" data-tab-content="2">
                        <p><span class="code-bleu">&lt;!</span><span class="code-rouge">DOCTYPE</span> <span class="code-violet">html</span><span
                                class="code-bleu">&gt;</span></p>
                        <p><span class="code-bleu">&lt;p&gt;</span>Du code HTML<span class="code-bleu">&lt;p&gt;</span></p>
                    </article>
                    <article class="main__page__code__content tab-content" data-tab-content="3">
                        <p><span class="code-bleu">&lt;!</span><span class="code-rouge">DOCTYPE</span> <span class="code-violet">html</span><span
                                class="code-bleu">&gt;</span></p>
                        <p><span class="code-bleu">&lt;p&gt;</span>Du code HTML<span class="code-bleu">&lt;p&gt;</span></p>
                    </article>
                </section>

                <article class="main__page__num-page">
                    <p>2</p>
                </article>
            </section>

            <?php
            include('include/footer.php');
            ?>

        </main>

    </div>

    <script src="./script/main.js"></script>

</body>

</html>