var inputNom = document.getElementById('nom');
var inputMail = document.getElementById('mail');
var inputSujet = document.getElementById('sujet');
var inputMessage = document.getElementById('message');
var form = document.getElementById('form-contact');

// reset du formulaire
form.reset();

// fonctions de vérification
function verifNom() {
    var inputNom = document.getElementById('nom');
    if ((inputNom.value.length > 3) && (inputNom.value.length < 40)) {
        inputNom.classList.remove('error-form');
        return true;
    } else {
        console.log("Le pseudo n'est pas valide !");
        inputNom.classList.add('error-form');
        return false;
    }
}

function verifSujet() {
    var inputSujet = document.getElementById('sujet');
    if ((inputSujet.value.length > 3) && (inputSujet.value.length < 40)) {
        inputSujet.classList.remove('error-form');
        return true;
    } else {
        console.log("Le sujet n'est pas valide !");
        inputSujet.classList.add('error-form');
        return false;
    }
}

function verifMail() {
    var regex_mail = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    var inputMail = document.getElementById('mail');
    if ((!regex_mail.test(inputMail.value)) || (inputSujet.value.length > 1)) {
        inputMail.classList.remove('error-form');
        return true;
    } else {
        console.log("Le sujet n'est pas valide !");
        inputMail.classList.add('error-form');
        return false;
    }
}

function verifMessage() {
    var inputMessage = document.getElementById('message');
    if ((inputMessage.value.length > 3)) {
        inputMessage.classList.remove('error-form');
        return true;
    } else {
        console.log("Le message n'est pas valide !");
        inputMessage.classList.add('error-form');
        return false;
    }
}

// vérifications
inputNom.addEventListener("blur", verifNom);
inputSujet.addEventListener("blur", verifSujet);
inputNom.addEventListener("blur", verifMail);
inputMessage.addEventListener("blur", verifMessage);

// création message d'erreur
var newDivFormAlert = document.createElement('div');
newDivFormAlert.classList.add("error-form-content");
var newPFormAlert = document.createElement('p');
newPFormAlert.classList.add("error-form-message");
newPFormAlert.innerHTML = "Il y a une erreur dans votre saisie...";

newDivFormAlert.appendChild(newPFormAlert);

// empêcher le form de s'envoyer
form.addEventListener("submit", function (e) {
    if (verifNom(true) && verifSujet(true) && verifMail(true) && verifMessage(true)) {} else {
        e.preventDefault();

        // affichage erreur
        var parentForm = form.parentElement;
        parentForm.insertBefore(newDivFormAlert, form.nextElementSibling);
    }
});