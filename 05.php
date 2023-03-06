
<?php

/* Ecrire un programme PHP où L'utilisateur saisit un nombre entier (<= 20).
L'algorithme affiche une ligne d’étoiles en fonction du nombre saisi.
 */

// on initialise la variable nombre selon la saisie de l’utilisateur

$nombre = readline("Entrez un nombre entier supérieur ou égal à 20 : ");

// on commence la boucle avec i à 0 puis on accrémente 1 (donc une étoile) tant que i est inférieur
// au nombre saisie

for ($i=0; $i < $nombre; $i++) 
{
 echo "*";
}

// on va à la ligne après chaque étoile
echo "\n";


?>
