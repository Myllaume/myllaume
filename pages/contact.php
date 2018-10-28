<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Myllaume</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <?php include("../include/header.php") ?>
        <main class="main row">
            <section class="main__page col-page">
                <h1 class="main__page--titre-page">Me contacter</h1>

                <p class="texte-form">Avec le formulaire ci-dessous, vous pouvez me contacter pour toute demande,
                    information.</p>

                <form action="./contact.php" method="post" id="form-contact" require>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" require>
                    <input type="email" name="mail" id="mail" placeholder="Votre adresse email" require>
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet du message" require>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" require></textarea>
                    <input type="submit" value="Contacter">
                </form>

                <?php include("../include/mail.php"); ?>

                <article class="main__page__num-page">
                    <p>3</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">

                <article class="coordonnes-bloc">
                    <h2 class="titre-border">Mes coordonnés</h2>
                    <p>Mail : brioudes.guillaume@outlook.fr</p>
                    <p>Tel : 06 75 91 35 42</p>
                </article>

                <article class="main__page__num-page">
                    <p>4</p>
                </article>
            </section>
            <?php include("../include/footer.html"); ?>
        </main>
    </div>
    <script src="../script/main.js"></script>
</body>

</html>