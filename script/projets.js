const projets = [{
        "type": "Site responsive",
        "visuel": "projet_vacarmes.png",
        "nom": "Vacarmes",
        "description": "Développement pour les étudiants en journalisme de Strasbourg (CUEJ) d'un site de présentation pour leur enquête sur les armes à feu.",
        "boutons": [{
            "site": "http://cuej.info/mini-sites/armes/"
        }]
    },
    {
        "type": "Maquette responsive",
        "visuel": "projet_index.png",
        "nom": "Index, hypertexte",
        "description": "Maquette responsive pour un projet de blog en cours de développement et au sujet de l'hypertexte.",
        "boutons": [{
            "maquette": "../src/docs/maquette_index.pdf"
        }]
    },
    {
        "type": "Site responsive",
        "visuel": "projet_schprochrenner.png",
        "nom": "Sprochrenner",
        "description": "Création avec une de mes camarades de promo d'un site responsive pour l'évenement éponyme.",
        "boutons": [{
            "site": "https://myllaume.github.io/sprochrenner/",
            "code": "https://github.com/Myllaume/sprochrenner/"
        }]
    },
    {
        "type": "Site responsive",
        "visuel": "projet_myllaume_v2.png",
        "nom": "Myllaume, v2",
        "description": "Deuxième version de mon site web en perpétuelle évolution, en même temps que je m'améliore.",
        "boutons": [{
            "code": "https://github.com/Myllaume/myllaume"
        }]
    },
    {
        "type": "Site responsive",
        "visuel": "projet_myllaume_v1.png",
        "nom": "Myllaume, v1",
        "description": "Première version de mon site web sous forme d'un cv en ligne complété par un blog."
    }
];

function genererProjet(projet) {

    const projetContent = document.querySelector('#projet-web-content');

    const newArticleContent = document.createElement('article');
    newArticleContent.classList.add('bloc-projet');
    newArticleContent.classList.add('titre-border_content');
    projetContent.appendChild(newArticleContent);

    const newH3Type = document.createElement('h3');
    newH3Type.classList.add('titre-border');
    newH3Type.innerHTML = projet.type;
    newArticleContent.appendChild(newH3Type);

    const newDivDescription = document.createElement('div');
    newDivDescription.classList.add('bloc-projet__description');
    newDivDescription.classList.add('row');
    newArticleContent.appendChild(newDivDescription);

    const newImgVisuel = document.createElement('img');
    newImgVisuel.classList.add('bloc-projet--image');
    newImgVisuel.setAttribute('alt', '');
    newImgVisuel.setAttribute('src', '../src/images/' + projet.visuel);
    newDivDescription.appendChild(newImgVisuel);

    const newH4Titre = document.createElement('h4');
    newH4Titre.innerHTML = projet.nom;
    newDivDescription.appendChild(newH4Titre);

    const newPDescription = document.createElement('p');
    newPDescription.innerHTML = projet.description;
    newDivDescription.appendChild(newPDescription);

    if (projet.boutons) {

        // console.log(projet.boutons)

        projet.boutons.forEach(function (bouton) {

            if (bouton.site) {
                const newButtonLien = document.createElement('a');
                newButtonLien.classList.add('bouton-little');
                newButtonLien.setAttribute('target', '_blank');
                newButtonLien.setAttribute('href', bouton.site);
                newButtonLien.innerHTML = "<div class='bouton-volet-content'><p>Voir le site</p><div class='bouton-volet-animation'></div></div>"
                newDivDescription.appendChild(newButtonLien);
            }

            if (bouton.maquette) {
                const newButtonLien = document.createElement('a');
                newButtonLien.classList.add('bouton-little');
                newButtonLien.setAttribute('target', '_blank');
                newButtonLien.setAttribute('href', bouton.maquette);
                newButtonLien.innerHTML = "<div class='bouton-volet-content'><p>Voir la maquette</p><div class='bouton-volet-animation'></div></div>"
                newDivDescription.appendChild(newButtonLien);
            }

            if (bouton.code) {
                const newButtonLien = document.createElement('a');
                newButtonLien.classList.add('bouton-little');
                newButtonLien.setAttribute('target', '_blank');
                newButtonLien.setAttribute('href', bouton.code);
                newButtonLien.innerHTML = "<div class='bouton-volet-content'><p>Voir le code</p><div class='bouton-volet-animation'></div></div>"
                newDivDescription.appendChild(newButtonLien);
            }
        });
    }
}

projets.forEach(function (projet) {
    genererProjet(projet);
});