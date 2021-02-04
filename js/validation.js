//Validation du formulaire

var erreur = false;
var msg;
var focus = true;

// fonction qui effectue la validation
function valider(){
	"use strict";
    erreur = false;
    focus = true; 
    
    //Déclaration des variables contenant les différents champs 
    var prenom = document.getElementById("prenom");
    var nom = document.getElementById("nom");
    var email = document.getElementById("email");
	var sujet = document.getElementById("sujet");
    var message = document.getElementById("message");
	
	// Ajouter une erreur au champs du message ou la retirer
    if(validerMessage(message.value)){
        message.focus();
        ajouterErreur(message);
    }
    else{
        retirerErreur(message);
    }
	
	// Ajouter une erreur au champs du sujet ou la retirer
    if(validerSujet(sujet.value)){
        sujet.focus();
        ajouterErreur(sujet);
    }
    else{
        retirerErreur(sujet);
    }
	
	// Ajouter une erreur au champs de l'adresse courriel ou la retirer
    if(validerCourriel(email.value)){
        email.focus();
        ajouterErreur(email);
    }
    else{
        retirerErreur(email);
    }
	
	// Ajouter une erreur au champs du nom ou la retirer
    if(validerNom(nom.value)){
        nom.focus();
        ajouterErreur(nom);
    }
    else{
        retirerErreur(nom);
    }
	
	// Ajouter une erreur au champs du prénom ou la retirer
    if(validerPrenom(prenom.value)){
        prenom.focus();
        ajouterErreur(prenom);
    }
    else{
        retirerErreur(prenom);
    }
	
    //si il y a une/des errreur(s), ne pas envoyer le formulaire.
    if(erreur){
        return false; 
    }
	
    //si il n'y a pas d'erreurs, l'envoyer.
    else{
        return true;
    }
}

//Fonction pour valider le prénom
function validerPrenom(prenom){
	"use strict";
    // Prénom est vide ?
	if(estVide(prenom)){
		if(lang == "fr"){
			msg = "Veuillez saisir votre prénom.";
		}
		else{
			msg = "Please enter you first name.";
		}
		return true;
	}
    // Prénom et nom ?
	if (prenom.indexOf(" ", 0) !== -1){
		if(lang == "fr"){
			msg = "Veuillez saisir seulement votre prénom dans la boîte Prénom.";
		}
		else{
			msg = "Please enter only your first name in the First name field.";
		}
		return true;
	}
    // Prenom a un chiffre?
	for (var i = 0; i < prenom.length; i++){
		var testChar = prenom.charAt(i); 
		if ((testChar >= '0') && (testChar <= '9')){ 
			if(lang == "fr"){
				msg = "Veuillez ne pas entrer de chiffre(s) dans le prénom.";
			}
			else{
				msg = "Please do not type digits in your first name.";
			}
			return true; 
		} 
	} 
	return false;
}

//Fonction pour valider le nom
function validerNom(nom){
	"use strict";
    // Nom est vide ?
	if(estVide(nom)){
		if(lang == "fr"){
			msg = "Veuillez saisir votre nom.";
		}
		else{
			msg = "Please enter your last name.";
		}
		return true;
	}
    // Nom et autre information ?
	if (nom.indexOf(" ", 0) !== -1){
		if(lang == "fr"){
			msg = "Veuillez saisir seulement votre nom dans la boîte Nom.";
		}
		else{
			msg = "Please enter only your last name in the Last name field.";
		}
		return true;
	}
    // Nom a un chiffre ?
	for (var i = 0; i < nom.length; i++){
		var testChar = nom.charAt(i);
		if ((testChar >= '0') && (testChar <= '9')){ 
			if(lang == "fr"){
				msg = "Veuillez ne pas entrer de chiffre(s) dans le nom."; 
			}
			else{
				msg = "Please do not type digits in your last name.";
			}
			return true; 
		} 
	} 
	return false;
}

// Fonction pour valider l'adresse courriel
function validerCourriel(courriel){
	"use strict";
    // E-mail vide?
	if (estVide(courriel)){
		if(lang == "fr"){
			msg = "Veuillez saisir votre adresse de courrier électronique.";
		}
		else{
			msg = "Please enter your email address.";
		}
		return true;
	}
    // pas de @ ?
	var posACom = courriel.indexOf("@", 1);
	if (posACom === -1){
		if(lang == "fr"){
			msg = "Votre adresse de courriel n'est pas valide. Elle doit contenir le symbole « @ ».";
		}
		else{
			msg = "Your email address is not valid. It must contain the \"@\" symbol.";
		}
		return true;
	}
    // Pas de . (domaine) ?
	if (courriel.indexOf(".", posACom + 2) === -1){ 
		if(lang == "fr"){
			msg = "Veuillez saisir un nom de domaine dans votre adresse courriel.";
		}
		else{
			msg = "Please enter a domain name in your email address.";
		}
		return true;
	}
	return false;
}

function validerSujet (sujet) {
	"use strict";
	if (sujet !== "info-1" && sujet !== "info-2" && sujet !== "probleme" && sujet !== "autre"){
		if(lang == "fr"){
			msg = "Veuillez saisir l'un des choix pour le sujet.";
		}
		else{
			msg = "Please select an option for the subject.";
		}
		return true;
	}
	return false;
}

//Fonction pour valider le message
function validerMessage(message){
	"use strict";
    // Prénom est vide ?
	if(estVide(message)){
		if(lang == "fr"){
			msg = "Veuillez saisir un message.";
		}
		else{
			msg = "Please enter a message.";
		}
		return true;
	}
	return false;
}

// Fonction pour ajouter une erreur
function ajouterErreur (champ){
	"use strict";
	erreur = true;
	
	var form = document.getElementById("contact-form");
	var aErreur = document.getElementById("erreur-" + champ.id);
	var messageErreur = document.getElementById("erreur-" + champ.id);
	
	if(!aErreur){
		messageErreur = document.createElement("p");
    	messageErreur.className = "erreur callout alert";
		messageErreur.id = "erreur-" + champ.id;
    	form.prepend(messageErreur);
	}
	messageErreur.innerHTML = msg;
}

// Fonction pour retirer une erreur
function retirerErreur (champ) {
	"use strict";

	var form = document.getElementById("contact-form");
	var messageErreur = document.getElementById("erreur-" + champ.id);
	console.log(messageErreur);
	if(messageErreur){
		form.removeChild(messageErreur);
	}
}

// Fonction pour vérifier si une entrée est vide
function estVide(texte){
	"use strict";
    // Aucune valeur entrée ?
 	if (texte.length === 0){
        return true;
    }
    // Pas tous des espaces ?
 	for (var i = 0; i < texte.length; i++){ 
 		if (texte.charAt(i) !== " "){
 			return false;
		}
 	}
 	return true;
}