<?php

/* Ecrire un programme PHP où L'utilisateur saisit un nombre entier (<= 20).
La fonction renvoie une chaine de caractères contenant un rectangle d’étoiles en fonction du nombre
saisi.
 */

// on initialise la fonction rectangle avec comme paramètre nombre

function rectangle($nombre)
{
 $etoile = "*";
 $espace = " ";
 $ligne = "";
 $resultat = "";

// on commence une boucle avec i partant de 0, on accrémente un tant que i est inférieure à la 
//variable nombre, le nombre de ligne et d’étoile sont égaux en fonction du nombre
    for ($i = 0; $i < $nombre; $i++) {
 $ligne .= $etoile;
    }

        for ($i = 0; $i < $nombre; $i++) {
        $resultat .= $ligne . "\n";
        }
 return $resultat;
}

$etoile = readline("Entrez :un nombre entier inférieur ou égal à 20:  ");

// On appelle et affiche la fonction
$resultat = rectangle ($etoile);
echo "Résultat: \n" . $resultat;

?>
