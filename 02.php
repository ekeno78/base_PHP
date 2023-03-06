
<?php
// on initialise une boucle avec i partant de 0, on accrémente tant que i est inférieur à 100

for ($i=0; $i < 100; $i++) { 
// si i divisé par 5 est égal à 0 alors on affiche

    if ($i % 5 == 0) {
    echo $i . '<br>';}

    }
// B
//on initialise une boucle avec la variable nombre qui prendra 15 entiers aléatoires entre 1 et 100
for ($i=0; $i < 15; $i++) { 
    $nombre = rand(1,100);
    echo "Le nombre aléatoire est : $nombre \n";
    // si i est égal à 0 quand divisé par deux alors on affiche que le nombre est divisible par deux
    if ($nombre % 2 == 0) {
     echo "Le nombre est divisible par 2";
    // sinon le nombre n’est pas divisible par deux 
    } else {
     echo "Le nombre n'est pas divisible par 2";
    }
}
?>
