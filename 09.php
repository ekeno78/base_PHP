<?php

// Initialisation des variables, la variable nombre prendra un entier aléatoire entre 0 et 100
$nombre = mt_rand(0, 100);
$nombre_saisi = 0;
$i = 0;

// tant que le nombre saisie n'est pas égal au nombre aléatoire et que i est inférieur à 5 alors on recommence
while ($nombre_saisi != $nombre && $i < 5) {
 $nombre_saisi = readline("Entrez un nombre : ");
    if ($nombre_saisi < $nombre) {
 echo "Ce nombre est trop petit \n";
    } elseif ($nombre_saisi > $nombre) {
 echo "Ce nombre est trop grand \n";
        } else {
 echo "Bravo vous avez gagné \n";
            }
 $i++;
}
// si le nombre d'essai est dépasser alors c'est perdu 
if ($i == 5)
{
 echo "Perdu le nombre à trouver était $nombre \n";
}

?>
