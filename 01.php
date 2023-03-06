<?php
/* crée un programme php qui affiche 25 fois "J'aime apprendre le développement */
// initialisation de la boucle où i = 0 et tant que i est inférieur à 25 on accrémente 1
 for ($i=0; $i < 25; $i++) 
    { 
     //on affiche donc 25 fois la phrase 
     echo " J’aime apprendre le développement \n";
     }
    
// B
// crée un programme PHP uniquement qui affiche bonjour autant de fois que le veux l'utilisateur 
//avec fonction
// initialisation de la saisie, qui demandera combien de fois l’utilisateur souhaite afficher la phrase
$saisie = readline("Combien de fois voulez-vous afficher cette phrase ?");
//on initialise la boucle avec i commençant à 0 qui accrémente 1 tant que i est inférieur à la saisie
for ($i=0; $i < $saisie; $i++) { 
// on affiche le résultat
 echo "J’aime apprendre le développement \n";
}
?>
