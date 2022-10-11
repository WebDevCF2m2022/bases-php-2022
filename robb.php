<?php
// $i vaut 1 au premier tour, il passe la condition, après l'exécution il effectue le changement et recommence la boucle (sans repasser par la Déclaration ou Initialisation)
for($i=100; $i >= 0; $i--){
    echo "$i ";
}

// Ici j'ai affiché les chiffres de 100 à 0 séparé par un espace


echo "<br>";
// Ici je veux afficher tous les impairs entre 2 et 1000 séparés par un espace

for($i=2; $i >= 1000; $i+=2){
    echo "$i ";
}
//afficher de 1 à -99 avec des espaces
for($i=1; $i >= -99; $i-=2){
    echo "$i ";
}
 

