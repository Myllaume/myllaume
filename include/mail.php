<?php

if(isset($_POST) && !empty($_POST)) {

    // récéption des information sur formulaire
    // intégrité des données
    $nom_envoyeur = htmlentities($_POST['nom'], ENT_QUOTES);
    $mail_envoyeur = htmlentities($_POST['mail'], ENT_QUOTES);
    $sujet_envoyeur = htmlentities($_POST['sujet'], ENT_QUOTES);
    $message_envoyeur = htmlentities($_POST['message'], ENT_QUOTES);


    $mail_destination = 'brioudes.guillaume@outlook.fr';
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail_destination)) // On filtre les serveurs qui rencontrent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    // déclaration des messages au format texte et au format HTML.
    $message_txt = $message_envoyeur;
    $message_html = "<html><head></head><body>".$message_envoyeur."</body></html>";
    
    // création de la boundary
    $boundary = "-----=".md5(rand());
    
    // définition du sujet.
    $sujet = "Myllaume : ".$sujet_envoyeur;
    
    // création du header de l'e-mail.
    $header = "From: \"".$nom_envoyeur."\"<".$mail_envoyeur.">".$passage_ligne;
    $header.= "Reply-to: \"".$nom_envoyeur."\" <".$mail_envoyeur.">".$passage_ligne;
    $header.= "MIME-Version: 1.0".$passage_ligne;
    $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    
    // création du message.
    $message = $passage_ligne."--".$boundary.$passage_ligne;

    // ajout du message au format texte.
    $message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    
    $message.= $passage_ligne."--".$boundary.$passage_ligne;

    // ajout du message au format HTML
    $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    
    
    // envoi de l'e-mail.
    // mail($mail_destination,$sujet,$message,$header);

    // test d'envoie
    if (mail($mail_destination,$sujet,$message,$header))
    {
        echo '<p>Message envoyé</p>'; 
    } 
    else
    {
        echo "<p>Une erreur est survenue lors de l'envoi du formulaire par email</p>";
    }
}

?>