<?php
/* Ecrire un programme PHP où L'utilisateur doit saisir des nombres entiers jusqu’à ce qu’il saisisse 
un nombre négatif.
Cet algorithme affiche le plus grand des nombres saisis et affiche la somme des nombres saisis. */

// On initialise les variables à 0 

$nombre = 0;
$somme = 0;
$plusGrand = 0;

// Tant que le nombre est supérieur ou égal à 0 il est recevable, si ce nombre est supérieur au
// nombre le plus grand alors celui-ci devient le plus grand nombre

while ($nombre >= 0) 
{
 $nombre = readline("Entrez un nombre : ");
    if ($nombre > $plusGrand) {
    $plusGrand = $nombre;
    }
 $somme += $nombre;
}

// On affiche le résultat
echo "Le plus grand nombre est : $plusGrand \n";
echo "La somme des nombres est : $somme \n";
?>
