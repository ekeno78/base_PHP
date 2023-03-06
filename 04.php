<?php
//on initialise une fonction generation avec pour paramètre le nom le prénom l’année et la ville avec 
//pour ces paramètres des fonctions attribués comme le nom en majuscule ou encore la première 
//lettre du prénom en majuscule

function generation($nom, $prenom, $annee, $ville)
{
 $age = date('Y') - $annee;
 $nom = strtoupper($nom);
 $prenom = ucfirst($prenom);
 $ville = ucfirst($ville);

// on renvoie donc la chaîne de caractère suivante 

 return "Nom: $nom \n Prénom: $prenom \n Age: $age \n Ville: $ville";
}

// On initialise les saisies

$nom = readline("Entrez votre nom: ");
$prenom = readline("Entrez votre prénom: ");
$annee = readline("Entrez votre année de naissance: ");
$ville = readline("Entrez votre ville: ");

// On appelle et affiche la fonction
$resultat = generation ($nom, $prenom, $annee, $ville);
echo "Résultat: \n" . $resultat;
?>
