<?php
// Initialisation des variables de distance et de temps selon la saisie de l’utilisateur

$distance = readline("Entrez la distance parcourue : ");
$heure = readline("Entrez le nombre d'heures : ");
// tant que la variable distance est supérieur à 50 et inférieur à 150, on affiche

while ($distance < 50 || $distance > 150) 
{
 echo "La distance doit être comprise entre 50 et 150 km\n";
 $distance = readline("Entrez la distance parcourue : ");
}
// tant que la variable heure est supérieur à 2 et inférieur à 8 on affiche

while ($heure < 2 || $heure > 8) 
{
 echo "Le nombre d'heures sur la route doit être compris entre 2 et 8 heures.\n";
 $heure = readline("Entrez le nombre d'heures : ");
}
// la variable vitesse correspond donc à la division de la variable distance et de la variable heure, on 
// affiche donc la vitesse moyenne

$vitesse = $distance / $heure;
echo "La vitesse moyenne est de $vitesse km/h";
?>
