<?php
/* crée un programme PHP où l'utilisateur saisit un nombre entier (<= 20).
La fonction renvoie un dessin (sous forme de chaine de caractère) suivant en fonction du nombre
saisi. */

// on initialise une fonction dessin avec comme paramètres nombre
function dessin($nombre) 
{
$dessin = "";

    for ($i = 1; $i <= $nombre; $i++) {
        for ($j = 1; $j <= $i; $j++) {
        $dessin .= "*";
        }
    $dessin .= "\n";
    }
    return $dessin;
}
// On appelle et affiche la fonction après avoir initialisé la variable de saisie de l'utilisateur.

$etoile = readline("Entrez un nombre entier supérieur ou égal à 20: ");

$test = dessin($etoile);
echo dessin($test);
?>
