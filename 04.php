<?php 
// on initialise une fonction salaire prenant en paramètre le département et le nombre de voiture

function salaire($dep, $nbVoiture)
{
// si le département correspond au 98 ou au 75 alors la commission est de 700 sinon elle est de 1000

    if ($dep == 98 || $dep == 75) 
    {
 $commission = 700;
    } else {
    $commission = 1000;
           }
// si le nombre de voiture vendu est supérieur à 5 alors il obtient une prime de 500e sinon il n'obtient pas de prime
// pas de prime

    if ($nbVoiture > 5) 
    {
 $prime = 500;
    } else {
    $prime = 0;
           }  
// si le vendeur n’a pas vendu de voiture son salaire est donc de 500e
    if ($nbVoiture == 0) 
    {
 $salaire = 500;
    } else {
// sinon le salaire du vendeur correspondra au commission multiplié par le nb de voiture vendu + la 
// prime 
 $salaire = $commission * $nbVoiture + $prime;
           }
 return $salaire;
}
// On initialise les saisies puis on fait appel à la fonction salaire afin d’obtenir le salaire du vendeur

$dep = readline("Entrez le département du vendeur : ");
$nbVoiture = readline("Entrez le nombre de voitures vendues : ");
echo "Le salaire du vendeur est de " . salaire($dep, $nbVoiture) . " euros.";
?>
