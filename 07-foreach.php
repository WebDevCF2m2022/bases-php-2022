<?php

/* Le concept de boucle en important dans tous les langages. 
EN PHP, il existe plusieurs manières de créer des boucles:

foreach => boucles sur les tableaux et objets
for => boucles de type numériques
while => boucle de vérification true
do while => boucle de vérification true avec 1 exécution obligatoire
fonctions récursives => on crée ses propres boucles 

Il faut, comme dans tous les langages, faire attention à ne jamais créer de boucles infinies


*/

#on va créer un tableau  - ici on commence par un tableau indexé
$tab1 = ["un", "deux", "trois", "quatre", "cinq"];

//affichage de toutes les valeurs du tableau
foreach($tab1 as $value){
    echo $value." ";
}
echo "<br>";

// idem avec un for (ne fonctionne qu'avec les tableaux indexés)
for($i=0;$i<count($tab1);$i++){
    echo $tab1[$i]." ";
}

//affichage de toutes les clefs et valeur du tableau
foreach($tab1 as $clef => $valeur){
    echo $clef." -> ".$valeur." <br>";
}
echo "<br>";


//tableau associatif
$tab2 = [
    "un"=>1,
    "deux"=>2,
    3=>3,
    "yep"=>"ça va?",
    4=>"quatre",
];

echo "<p>tableau associatif, le foreach est préférable à toutes les autres boucles (dans 90% des cas)</p>";

//le foreach va lister tout ce que j'ai dans ma liste, pas besoin de lui préciser un début ou une fin. On n'aura jamais de liste infinie avec un foreach (sauf en cas de liste gigantesque)
//c'est très souvent le foreach qu'on utilisera pour les tableaux
foreach($tab2 as $value){
    echo "$value ";
}
echo "<br>";

foreach($tab2 as $key => $value){
    // echo $key." -> ".$value."<br>";
    echo "$key -> $value<br>";
}