<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="N'hésitez pas à me contacter pour une demande d’information ou une proposition. Je réponds à toute demande sur le développement web." />
    <link rel="canonical" href="https://myllaume.fr/pages/contact.php" />
    <title>Contacter Guillaume Brioudes - Myllaume</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <?php include("../include/header.php") ?>
        <main class="main row">
            <section class="main__page col-page">
                <h1 class="main__page--titre-page">Me contacter</h1>

                <p>Avec le formulaire ci-dessous, vous pouvez rapidement me contacter pour toute proposition, demande ou information.</p>
                
                <?php include("../include/mail.php"); ?>
                
                <form action="./contact.php" method="post" id="form-contact" require>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" require>
                    <input type="email" name="mail" id="mail" placeholder="Votre adresse email" require>
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet du message" require>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" require></textarea>
                    <input type="submit" value="Contacter">
                </form>

                <article class="main__page__num-page">
                    <p>3</p>
                </article>
            </section>

            <div class="main--separation"></div>

            <section class="main__page col-page">

                <article class="coordonnes-bloc titre-border_content">
                    <h2 class="titre-border">Mes coordonnées</h2>
                    <p><b>Mail :</b> <a href="mailto:brioudes.guillaume@outlook.fr">brioudes.guillaume@outlook.fr</a></p>
                    <p><b>Tel :</b> <a href="tel:+33675913542">06 75 91 35 42</a></p>
                </article>

                <p><em>Vous ou un(e) de vos contacts recherche un stagiaire en développement web ?</em> Je serais très heureux de discuter avec vous !</p>

                <article class="main__page__num-page">
                    <p>4</p>
                </article>
            </section>
            <?php include("../include/footer.html"); ?>
        </main>
    </div>
    <script src="../script/main.js"></script>
    <script src="../script/form.js"></script>
</body>

</html>